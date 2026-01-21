import os
import shutil
from datetime import datetime

def independent_rebuild():
    """
    Independent Rebuild Script (Safe Copy Method).
    Copies files from WebsiteLIVE/ into a new 05-rebuild/ directory.
    Standardizes all names to the 00-99 numbering scheme.
    """
    
    BASE_SRC = 'WebsiteLIVE'
    BASE_DEST = '05-rebuild'
    
    # 1. THE COMPLETE RESTRUCTURING MAP
    # Source (relative to WebsiteLIVE) -> Target (relative to 05-rebuild)
    mapping = {
        # --- [05] PUBLIC PRODUCTION ---
        # Core Pages (Handling both '1-' and '01-' variations)
        '1-index.php':      '05-public_html/05-10-pages-core/10-01-index.php',
        '01-index.php':     '05-public_html/05-10-pages-core/10-01-index.php',
        '2-about.php':      '05-public_html/05-10-pages-core/10-02-about.php',
        '02-about.php':     '05-public_html/05-10-pages-core/10-02-about.php',
        '3-contact.php':    '05-public_html/05-10-pages-core/10-03-contact.php',
        '03-contact.php':   '05-public_html/05-10-pages-core/10-03-contact.php',
        '4-products.php':   '05-public_html/05-10-pages-core/10-04-products_hub.php',
        '04-products.php':  '05-public_html/05-10-pages-core/10-04-products_hub.php',
        
        # Catalogue Pages
        '10-pto.php':                '05-public_html/05-20-page-catalogue/20-10-pto.php',
        '11-pumps.php':              '05-public_html/05-20-page-catalogue/20-11-pumps.php',
        '12-valves.php':             '05-public_html/05-20-page-catalogue/20-12-valves.php',
        '13-hoists-cylinders.php':   '05-public_html/05-20-page-catalogue/20-13-hoists.php',
        '14-controls.php':           '05-public_html/05-20-page-catalogue/20-14-controls.php',
        '15-spares.php':             '05-public_html/05-20-page-catalogue/20-15-spares.php',
        '16-application_kits.php':   '05-public_html/05-20-page-catalogue/20-17-application_kits.php',
        
        # Legal
        '90-privacy.php':            '05-public_html/05-90-pages-legal/90-01-privacy.php',
        '91-terms.php':              '05-public_html/05-90-pages-legal/90-02-terms.php',
        
        # System Engine (Includes)
        'includes/00-config.php':       '05-public_html/05-00-includes/00-01-config.php',
        'includes/auth_check.php':      '05-public_html/05-00-includes/00-02-auth_check.php',
        'includes/header.php':          '05-public_html/05-00-includes/00-03-header.php',
        'includes/footer.php':          '05-public_html/05-00-includes/00-04-footer.php',
        'includes/product_data.php':    '05-public_html/05-00-includes/00-05-product_data.php',
        'includes/product_renderer.php':'05-public_html/05-00-includes/00-06-product_renderer.php',
        'includes/email_helper.php':    '05-public_html/05-00-includes/00-07-email_helper.php',
        'includes/partners.php':        '05-public_html/05-00-includes/00-08-partners.php',
        'includes/image_map.php':       '05-public_html/05-00-includes/00-09-image_map.php',
        'includes/99-bootstrap.php':    '05-public_html/05-00-includes/00-99-bootstrap.php',
        
        # Static Assets (Directories)
        'assets/css':                '05-public_html/05-80-assets/80-01-css',
        'assets/js':                 '05-public_html/05-80-assets/80-02-js',
        'assets/images':             '05-public_html/05-80-assets/80-03-images',
        
        # --- [00/01] DATA & MANAGEMENT ---
        'website_data':              '00-website_data',
        'Management':                '01-management'
    }

    log_entries = []
    def log(msg):
        entry = f"[{datetime.now().strftime('%H:%M:%S')}] {msg}"
        print(entry)
        log_entries.append(entry)

    log("--- Powerauto Clean Rebuild Engine Initialized ---")

    # PRE-FLIGHT
    if not os.path.exists(BASE_SRC):
        log(f"CRITICAL: '{BASE_SRC}' folder not found. Are you running this from the root?")
        return

    # WIPE AND PREP REBUILD ROOT
    if os.path.exists(BASE_DEST):
        log(f"Removing old rebuild folder...")
        shutil.rmtree(BASE_DEST)
    os.makedirs(BASE_DEST)

    stats = {"copied": 0, "skipped": 0, "errors": 0}

    # EXECUTE REFACTOR
    for src_rel, dest_rel in mapping.items():
        src_path = os.path.join(BASE_SRC, src_rel)
        dest_path = os.path.join(BASE_DEST, dest_rel)
        
        if os.path.exists(src_path):
            # Create subdirectory hierarchy
            dest_dir = os.path.dirname(dest_path)
            if not os.path.exists(dest_dir):
                os.makedirs(dest_dir)
            
            try:
                # If target file exists (from a previous mapping match), skip to avoid overwrite
                if os.path.exists(dest_path):
                    log(f"ALREADY COPIED (Target exists): {dest_rel}")
                    continue

                if os.path.isdir(src_path):
                    shutil.copytree(src_path, dest_path)
                    log(f"COPIED DIR:  {src_rel} -> {dest_rel}")
                else:
                    shutil.copy2(src_path, dest_path)
                    log(f"COPIED FILE: {src_rel} -> {dest_rel}")
                stats["copied"] += 1
            except Exception as e:
                log(f"ERROR processing {src_rel}: {str(e)}")
                stats["errors"] += 1
        else:
            log(f"NOT FOUND: {src_rel} (Assuming alternate version exists)")
            stats["skipped"] += 1

    # GENERATE AUTOMATIC ROOT REDIRECT
    with open(os.path.join(BASE_DEST, "index.php"), "w") as f:
        f.write("<?php header('Location: /05-public_html/05-10-pages-core/10-01-index.php'); exit; ?>")
    log("GENERATED: Root entry-point redirect")

    # SAVE AUDIT LOG
    report_file = os.path.join(BASE_DEST, "01-management/rebuild_audit.txt")
    with open(report_file, "w") as f:
        f.write("\n".join(log_entries))

    log("--- Rebuild Process Complete ---")
    log(f"Clean structure now in: {BASE_DEST}/")
    log(f"Total copied: {stats['copied']}, Errors: {stats['errors']}")

if __name__ == "__main__":
    independent_rebuild()