from PIL import Image
import os

def resize_banner():
    # Configuration
    input_filename = "ProductsBannerStatic.png" # Ensure this file is in the folder
    target_height = 400 # Matching the CSS height of .page-hero
    
    print(f"--- Processing {input_filename} ---")
    
    try:
        with Image.open(input_filename) as img:
            # Calculate aspect ratio
            aspect_ratio = img.width / img.height
            
            # Calculate new width based on target height
            new_width = int(target_height * aspect_ratio)
            
            print(f"Original Size: {img.width}x{img.height}")
            print(f"Target Size:   {new_width}x{target_height}")
            
            # Resize using high-quality resampling
            img_resized = img.resize((new_width, target_height), Image.Resampling.LANCZOS)
            
            # Save overwriting the original (or change name if you prefer safety)
            # We use optimization and reduce quality slightly for web speed (85 is standard)
            img_resized.save(input_filename, optimize=True, quality=85)
            
            print("Success! Image resized and optimized.")
            print("The stuttering should now be gone.")

    except FileNotFoundError:
        print(f"Error: Could not find {input_filename} in this folder.")
    except Exception as e:
        print(f"An error occurred: {e}")

if __name__ == "__main__":
    # You need to install Pillow first: pip install Pillow
    resize_banner()