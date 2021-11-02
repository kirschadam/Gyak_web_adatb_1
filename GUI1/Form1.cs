using System;
using System.IO;
using System.Text;
using System.Windows.Forms;

namespace GUI1
{
    public partial class Form1 : Form
    {
        int modify_index = -1; bool saved = false;

        public Form1() { InitializeComponent(); }
        private void Kilepes_stripitem_Click(object sender, EventArgs e) { Application.Exit(); }
        private void Nevjegy_stripitem_Click(object sender, EventArgs e) { MessageBox.Show("Kirsch Ádám Péter\n2021.11.02"); }

        private void Add_button_Click(object sender, EventArgs e)
        {
            TextBox[] inputs = { Marka_textbox, Tipus_textbox, Gyartaseve_textbox, Szin_textbox, Rendszam_textbox };
            foreach (TextBox item in inputs) if (item.Text == "") { MessageBox.Show("One or more of the inputs are empty!"); return; }

            string entry = "";
            foreach (TextBox item in inputs)
            {
                if (entry != "") entry += ";";
                entry += item.Text;
            }

            if (modify_index != -1)
            {
                Listbox.Items[modify_index] = entry;
                modify_index = -1;
                Add_button.Text = "Hozzáad";
            }
            else
            {
                foreach (string item in Listbox.Items) if (item == entry) { MessageBox.Show("This entry already exists!"); return; }

                Listbox.Items.Add(entry);
            }
            saved = false;
        }

        private void Delete_Click(object sender, EventArgs e) 
        {
            if (Listbox.SelectedItem != null) Listbox.Items.RemoveAt(Listbox.SelectedIndex);
            else MessageBox.Show("No item Selected!");
        }

        private void Modify_button_Click(object sender, EventArgs e)
        {
            if(Listbox.SelectedItem != null)
            {
                TextBox[] inputs = { Marka_textbox, Tipus_textbox, Gyartaseve_textbox, Szin_textbox, Rendszam_textbox };
                modify_index = Listbox.SelectedIndex;

                string[] modify = Listbox.SelectedItem.ToString().Split(';');
                for(int i = 0; i < 5; i++) inputs[i].Text = modify[i];

                Add_button.Text = "Módosít";
            }
            else MessageBox.Show("No item Selected!");
        }

        private void Megnyitas_stripitem_Click(object sender, EventArgs e)
        {
            if(Listbox.Items.Count != 0 && saved == false)
            {
                if (MessageBox.Show("There are entries in the list.\n Are you sure you want to load in a new one before saving?", "Warning!", MessageBoxButtons.YesNo) == DialogResult.No) return;
            }

            OpenFileDialog open = new OpenFileDialog() { InitialDirectory = "C:\\Users\\Tanulo\\source\\repos\\GUI1\\GUI1\\bin\\Debug" };

            if (open.ShowDialog() == DialogResult.OK)
            {
                Listbox.Items.Clear();
                using (StreamReader reader = new StreamReader(open.FileName))
                {
                    while (!reader.EndOfStream) Listbox.Items.Add(reader.ReadLine());
                }
            }
        }

        private void Mentes_stripitem_Click(object sender, EventArgs e) { Save("existing file"); }
        private void Ujletrehozasa_stripitem_Click(object sender, EventArgs e) { Save("new file"); }

        private void Save(string type)
        {
            if (Listbox.Items.Count == 0)
            {
                if (MessageBox.Show("There are no entries in the list.\nAre you sure you want to save?", "Warning!", MessageBoxButtons.YesNo) == DialogResult.No) return;
            }

            SaveFileDialog save = new SaveFileDialog()
            {
                InitialDirectory = "C:\\Users\\Tanulo\\source\\repos\\GUI1\\GUI1\\bin\\Debug",
                FileName = "*.txt",
                DefaultExt = "txt",
                Filter = "txt files (*.txt)|*.txt|All files (*.*)|*.*",
                AddExtension = true,
                CheckPathExists = true
            };
            if(type == "existing file") { save.CheckFileExists = true; }

            if (save.ShowDialog() == DialogResult.OK)
            {
                using (StreamWriter writer = new StreamWriter(save.FileName, false, Encoding.UTF8))
                {
                    foreach (string item in Listbox.Items) writer.WriteLine(item);
                }
                saved = true;
            }
        }
    }
}
