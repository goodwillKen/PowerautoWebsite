import os
import shutil

# Configuration
SOURCE_DIR = 'images'
DEST_DIR = 'images' # Saving to the same folder

# Mapping: Old Name (without extension) -> New Filename (with .webp extension)
# Since you converted everything to .webp, we assume source files end in .webp
file_map = {
    # --- 01. HERO BANNERS ---
    'AboutUsBannerWide': '01-02-about-hero.webp',
    'ContactBanner': '01-04-contact-hero.webp',
    'ProductsBanner': '01-03-products-hero.webp',
    'Workshop-Hero-Privacy': '01-05-privacy-hero.webp',
    'Workshop-Hero-Terms': '01-06-terms-hero.webp',
    # Note: '01-01-home-hero.webp' was not in your old list, skipping or assign a placeholder manually if needed.

    # --- 10. CATEGORY HEADERS (1200x1200) ---
    'PTOcategory1200x1200': '10-01-pto-header.webp',
    'PUMPScategory1200x1200': '10-02-pumps-header.webp',
    'VALVEScategory1200x1200': '10-03-valves-header.webp',
    'TANKSPOWERPACKScategory1200x1200': '10-04-tanks-header.webp',
    'HOISTCYLScategory1200x1200': '10-05-hoists-header.webp',
    'CONTROLScategory1200x1200': '10-06-controls-header.webp',
    'HoseCouplingFittingscategory1200x1200': '10-07-hoses-header.webp',
    'FILTERScategory1200x1200': '10-08-filters-header.webp',
    'BODYCOMPACCcategory1200x1200': '10-09-body-header.webp',
    'WINCHcategory1200x1200': '10-10-winch-header.webp',
    'ApplicationKits1200x1200': '10-11-kits-header.webp',
    'MaintenanceSparesKitsCategory1200x1200': '10-12-spares-header.webp',

    # --- 11. CATEGORY THUMBNAILS (800x800) ---
    'PTOcategory800x800': '11-01-pto-thumb.webp',
    'PUMPScategory800x800': '11-02-pumps-thumb.webp',
    'VALVEScategory800x800': '11-03-valves-thumb.webp',
    'TANKSPOWERPACKScategory1200x1200': '11-04-tanks-thumb.webp', # Reusing 1200 if 800 doesn't exist
    'HOISTCYLScategory800x800': '11-05-hoists-thumb.webp',
    'CONTROLSkeyproduct800x800': '11-06-controls-thumb.webp',
    'SPAREAUXkeyproduct800x800': '11-12-spares-thumb.webp',

    # --- 30. PARTNER LOGOS ---
    'hydreco-logo': '30-01-hydreco.webp',
    'hydac-logo': '30-02-hydac.webp',
    'Brevini_Dana_Logo': '30-03-brevini.webp',
    'scanreco-logo': '30-04-scanreco.webp',
    'superwinch-logo': '30-05-superwinch.webp',

    # --- 40. APPLICATIONS ---
    'TIPPERAPP800x800': '40-01-tipper.webp',
    'TILTSLIDEAPP800x800': '40-02-tiltslide.webp',
    'WASTEREMOVALAPP800x800': '40-03-waste.webp',
    'SKIPLOADERAPP800x800': '40-04-skiploader.webp',
    'CRANESAPP800x800': '40-05-crane.webp',
    'SIDETIPPERAPP800x800': '40-06-sidetipper.webp',
    'HOOKLIFTAPP800x800': '40-07-hooklift.webp',
    'WALKINGFLOORAPP800x800': '40-08-walkingfloor.webp',
    'LOWLOADER800x800': '40-09-lowloader.webp',

    # --- 99. UI ---
    'Powerauto-Logo': '99-01-logo-main.webp',
    'Powerauto-about': '99-02-about-workshop.webp',
}

def rename_files():
    print(f"--- Starting Image Standardization ---")
    
    # Ensure source directory exists
    if not os.path.exists(SOURCE_DIR):
        print(f"Error: Directory '{SOURCE_DIR}' not found.")
        return

    count = 0
    missing = []

    for old_stem, new_name in file_map.items():
        # We assume source files are .webp as per your instruction
        old_file = f"{old_stem}.webp"
        
        src_path = os.path.join(SOURCE_DIR, old_file)
        dest_path = os.path.join(DEST_DIR, new_name)

        if os.path.exists(src_path):
            try:
                shutil.copy2(src_path, dest_path)
                print(f"✅ Copied: {old_file} -> {new_name}")
                count += 1
            except Exception as e:
                print(f"❌ Error copying {old_file}: {e}")
        else:
            # Fallback: Check if maybe the original .png/.jpg still exists?
            # Uncomment below if you want to check for png/jpg too
            # found = False
            # for ext in ['.png', '.jpg', '.jpeg']:
            #     alt_src = os.path.join(SOURCE_DIR, old_stem + ext)
            #     if os.path.exists(alt_src):
            #         shutil.copy2(alt_src, dest_path) # Warning: This copies PNG to .webp name without converting! 
            #         print(f"⚠️ Copied non-webp source: {old_stem}{ext} -> {new_name} (Requires Conversion!)")
            #         found = True
            #         break
            # if not found:
            missing.append(old_file)

    print(f"\n--- Complete ---")
    print(f"Successfully processed: {count} files")
    
    if missing:
        print(f"\n⚠️ The following files were not found (check spelling or extension):")
        for m in missing:
            print(f" - {m}")

if __name__ == "__main__":
    rename_files()