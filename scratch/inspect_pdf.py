import pypdf

reader = pypdf.PdfReader('scratch/test_output.pdf')
page = reader.pages[0]

print("Page MediaBox:", page.mediabox)

def visitor_body(text, cm, tm, font_dict, font_size):
    if text.strip():
        # tm is the transformation matrix, tm[4] is X, tm[5] is Y
        print(f"Text: {text.strip():<30} | Size: {font_size:<5} | X: {tm[4]:.2f} | Y: {tm[5]:.2f}")

page.extract_text(visitor_text=visitor_body)
