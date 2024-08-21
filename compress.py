import tkinter as tk
from tkinter import filedialog, messagebox
from PIL import Image
import os

def compress_image(input_file, output_file, quality):
    with Image.open(input_file) as img:
        img.save(output_file, "JPEG", optimize=True, quality=quality)

def browse_file():
    filename = filedialog.askopenfilename(
        filetypes=[("Image files", "*.jpg;*.jpeg;*.png")]
    )
    if filename:
        entry_input.delete(0, tk.END)
        entry_input.insert(0, filename)

        # Default output file with "_compressed" added to the name
        default_output_file = get_default_output_filename(filename)
        entry_output.delete(0, tk.END)
        entry_output.insert(0, default_output_file)

def get_default_output_filename(input_file):
    file_dir, file_name = os.path.split(input_file)
    file_base, file_ext = os.path.splitext(file_name)
    return os.path.join(file_dir, f"{file_base}_compressed{file_ext}")

def compress():
    input_file = entry_input.get()
    output_file = entry_output.get()
    try:
        quality = int(entry_quality.get())
        if not (0 <= quality <= 100):
            raise ValueError
    except ValueError:
        messagebox.showerror("Invalid Input", "Quality must be an integer between 0 and 100.")
        return

    try:
        compress_image(input_file, output_file, quality)
        messagebox.showinfo("Success", f"Image saved at {output_file}")
    except Exception as e:
        messagebox.showerror("Error", f"Failed to compress image: {e}")

# Setup UI
root = tk.Tk()
root.title("Image Compressor")

# Input file selection
tk.Label(root, text="Select image:").grid(row=0, column=0, padx=10, pady=5)
entry_input = tk.Entry(root, width=40)
entry_input.grid(row=0, column=1, padx=10, pady=5)
btn_browse_input = tk.Button(root, text="Browse", command=browse_file)
btn_browse_input.grid(row=0, column=2, padx=10, pady=5)

# Output file selection (auto-filled with default)
tk.Label(root, text="Save as:").grid(row=1, column=0, padx=10, pady=5)
entry_output = tk.Entry(root, width=40)
entry_output.grid(row=1, column=1, padx=10, pady=5)

# Quality selection
tk.Label(root, text="Quality (0-100):").grid(row=2, column=0, padx=10, pady=5)
entry_quality = tk.Entry(root, width=10)
entry_quality.insert(0, "85")  # Default quality
entry_quality.grid(row=2, column=1, padx=10, pady=5, sticky="w")

# Compress button
btn_compress = tk.Button(root, text="Compress", command=compress)
btn_compress.grid(row=3, columnspan=3, padx=10, pady=20)

root.mainloop()
