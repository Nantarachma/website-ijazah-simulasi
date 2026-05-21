import fitz

doc = fitz.open("scratch/test_output.pdf")
page = doc.load_page(0)
pix = page.get_pixmap(dpi=150)
pix.save("scratch/test_output.png")
print("PNG rendered successfully at scratch/test_output.png")
