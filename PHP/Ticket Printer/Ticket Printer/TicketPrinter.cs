using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.IO;
using iTextSharp.text;
using iTextSharp.text.pdf;

namespace Ticket_Printer
{
    public partial class TicketPrinter : Form
    {
        public TicketPrinter()
        {
            InitializeComponent();
            this.PreviewLabel.Visible = false;
            this.PreviewBtn.Visible = false;
        }

        private int quantity = 0;

        OpenFileDialog img = new OpenFileDialog();
        private void BrowseClicked(object sender, EventArgs e)
        {
            img.Filter = "Choose Image(*.jpg;*.png;*.gif)|*.jpg;*.png;*.gif";

            if (img.ShowDialog() == DialogResult.OK)
            {
                //ImagePictureBox.Image = Image.FromFile(img.FileName);
                ImagePictureBox.Image = System.Drawing.Image.FromFile(img.FileName);
            }
        }

        private void CreatePDFClicked(object sender, EventArgs e)
        {
            try
            {
                FileStream fs = new FileStream(@"C:\Users\Asus\Desktop\Ticket" + ".pdf", FileMode.Create, FileAccess.Write, FileShare.None);
                Document doc = new Document(PageSize.A4);

                PdfWriter writer = PdfWriter.GetInstance(doc, fs);
                doc.Open();

                //BaseFont bft = BaseFont.CreateFont(BaseFont.TIMES_ROMAN, BaseFont.CP1252, false);
                //Font ft = new Font(bft, 12);

                Paragraph p = new Paragraph("\n\n");
                //doc.Add(p);

                //string url = "C:/Users/Asus/Downloads/atlanta-skyline-by-colton-hd-wallpaper.jpg";
                string url = img.FileName;
                iTextSharp.text.Image image = iTextSharp.text.Image.GetInstance(url);
                //doc.Add(image);
                quantity = Convert.ToInt32(QuantityTextBox.Text);
                for (int i = 0; i < quantity; i++)
                {
                    doc.Add(image);
                    doc.Add(p);
                }

                doc.Close();

                MessageBox.Show("PDF has been generated.", "Done");
            }
            catch
            {
                MessageBox.Show("There is an error.", "Error");
            }
        }

        private void PreviewClicked(object sender, EventArgs e)
        {

        }


    }
}
