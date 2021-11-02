
namespace GUI1
{
    partial class Form1
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.Listbox = new System.Windows.Forms.ListBox();
            this.Data_label = new System.Windows.Forms.Label();
            this.Add_button = new System.Windows.Forms.Button();
            this.Marka_textbox = new System.Windows.Forms.TextBox();
            this.Delete = new System.Windows.Forms.Button();
            this.Modify_button = new System.Windows.Forms.Button();
            this.Tipus_textbox = new System.Windows.Forms.TextBox();
            this.Gyartaseve_textbox = new System.Windows.Forms.TextBox();
            this.Szin_textbox = new System.Windows.Forms.TextBox();
            this.Rendszam_textbox = new System.Windows.Forms.TextBox();
            this.Input_panel = new System.Windows.Forms.Panel();
            this.Marka_label = new System.Windows.Forms.Label();
            this.Tipus_label = new System.Windows.Forms.Label();
            this.Gyartaseve_label = new System.Windows.Forms.Label();
            this.Szin_label = new System.Windows.Forms.Label();
            this.Rendszam_label = new System.Windows.Forms.Label();
            this.menuStrip1 = new System.Windows.Forms.MenuStrip();
            this.Main1_stripitem = new System.Windows.Forms.ToolStripMenuItem();
            this.Megnyitas_stripitem = new System.Windows.Forms.ToolStripMenuItem();
            this.Mentes_stripitem = new System.Windows.Forms.ToolStripMenuItem();
            this.Ujletrehozasa_stripitem = new System.Windows.Forms.ToolStripMenuItem();
            this.Main2_stripitem = new System.Windows.Forms.ToolStripMenuItem();
            this.Nevjegy_stripitem = new System.Windows.Forms.ToolStripMenuItem();
            this.Kilepes_stripitem = new System.Windows.Forms.ToolStripMenuItem();
            this.Input_panel.SuspendLayout();
            this.menuStrip1.SuspendLayout();
            this.SuspendLayout();
            // 
            // Listbox
            // 
            this.Listbox.FormattingEnabled = true;
            this.Listbox.ItemHeight = 16;
            this.Listbox.Location = new System.Drawing.Point(98, 70);
            this.Listbox.Name = "Listbox";
            this.Listbox.Size = new System.Drawing.Size(347, 228);
            this.Listbox.TabIndex = 0;
            // 
            // Data_label
            // 
            this.Data_label.AutoSize = true;
            this.Data_label.Location = new System.Drawing.Point(493, 63);
            this.Data_label.Name = "Data_label";
            this.Data_label.Size = new System.Drawing.Size(52, 17);
            this.Data_label.TabIndex = 1;
            this.Data_label.Text = "Adatok";
            // 
            // Add_button
            // 
            this.Add_button.Location = new System.Drawing.Point(515, 300);
            this.Add_button.Name = "Add_button";
            this.Add_button.Size = new System.Drawing.Size(100, 37);
            this.Add_button.TabIndex = 2;
            this.Add_button.Text = "Hozzáad";
            this.Add_button.UseVisualStyleBackColor = true;
            this.Add_button.Click += new System.EventHandler(this.Add_button_Click);
            // 
            // Marka_textbox
            // 
            this.Marka_textbox.Location = new System.Drawing.Point(36, 28);
            this.Marka_textbox.Name = "Marka_textbox";
            this.Marka_textbox.Size = new System.Drawing.Size(100, 22);
            this.Marka_textbox.TabIndex = 3;
            // 
            // Delete
            // 
            this.Delete.Location = new System.Drawing.Point(98, 300);
            this.Delete.Name = "Delete";
            this.Delete.Size = new System.Drawing.Size(166, 24);
            this.Delete.TabIndex = 4;
            this.Delete.Text = "Törlés";
            this.Delete.UseVisualStyleBackColor = true;
            this.Delete.Click += new System.EventHandler(this.Delete_Click);
            // 
            // Modify_button
            // 
            this.Modify_button.Location = new System.Drawing.Point(290, 300);
            this.Modify_button.Name = "Modify_button";
            this.Modify_button.Size = new System.Drawing.Size(155, 24);
            this.Modify_button.TabIndex = 5;
            this.Modify_button.Text = "Módosítás";
            this.Modify_button.UseVisualStyleBackColor = true;
            this.Modify_button.Click += new System.EventHandler(this.Modify_button_Click);
            // 
            // Tipus_textbox
            // 
            this.Tipus_textbox.Location = new System.Drawing.Point(36, 67);
            this.Tipus_textbox.Name = "Tipus_textbox";
            this.Tipus_textbox.Size = new System.Drawing.Size(100, 22);
            this.Tipus_textbox.TabIndex = 6;
            // 
            // Gyartaseve_textbox
            // 
            this.Gyartaseve_textbox.Location = new System.Drawing.Point(36, 105);
            this.Gyartaseve_textbox.Name = "Gyartaseve_textbox";
            this.Gyartaseve_textbox.Size = new System.Drawing.Size(100, 22);
            this.Gyartaseve_textbox.TabIndex = 7;
            // 
            // Szin_textbox
            // 
            this.Szin_textbox.Location = new System.Drawing.Point(36, 142);
            this.Szin_textbox.Name = "Szin_textbox";
            this.Szin_textbox.Size = new System.Drawing.Size(100, 22);
            this.Szin_textbox.TabIndex = 8;
            // 
            // Rendszam_textbox
            // 
            this.Rendszam_textbox.Location = new System.Drawing.Point(36, 179);
            this.Rendszam_textbox.Name = "Rendszam_textbox";
            this.Rendszam_textbox.Size = new System.Drawing.Size(100, 22);
            this.Rendszam_textbox.TabIndex = 9;
            // 
            // Input_panel
            // 
            this.Input_panel.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.Input_panel.Controls.Add(this.Tipus_textbox);
            this.Input_panel.Controls.Add(this.Rendszam_textbox);
            this.Input_panel.Controls.Add(this.Marka_textbox);
            this.Input_panel.Controls.Add(this.Szin_textbox);
            this.Input_panel.Controls.Add(this.Gyartaseve_textbox);
            this.Input_panel.Location = new System.Drawing.Point(479, 71);
            this.Input_panel.Name = "Input_panel";
            this.Input_panel.Size = new System.Drawing.Size(165, 227);
            this.Input_panel.TabIndex = 10;
            // 
            // Marka_label
            // 
            this.Marka_label.AutoSize = true;
            this.Marka_label.Location = new System.Drawing.Point(638, 100);
            this.Marka_label.Name = "Marka_label";
            this.Marka_label.Size = new System.Drawing.Size(47, 17);
            this.Marka_label.TabIndex = 11;
            this.Marka_label.Text = "Márka";
            // 
            // Tipus_label
            // 
            this.Tipus_label.AutoSize = true;
            this.Tipus_label.Location = new System.Drawing.Point(638, 139);
            this.Tipus_label.Name = "Tipus_label";
            this.Tipus_label.Size = new System.Drawing.Size(43, 17);
            this.Tipus_label.TabIndex = 12;
            this.Tipus_label.Text = "Típus";
            // 
            // Gyartaseve_label
            // 
            this.Gyartaseve_label.AutoSize = true;
            this.Gyartaseve_label.Location = new System.Drawing.Point(638, 177);
            this.Gyartaseve_label.Name = "Gyartaseve_label";
            this.Gyartaseve_label.Size = new System.Drawing.Size(85, 17);
            this.Gyartaseve_label.TabIndex = 13;
            this.Gyartaseve_label.Text = "Gyártás éve";
            // 
            // Szin_label
            // 
            this.Szin_label.AutoSize = true;
            this.Szin_label.Location = new System.Drawing.Point(638, 214);
            this.Szin_label.Name = "Szin_label";
            this.Szin_label.Size = new System.Drawing.Size(35, 17);
            this.Szin_label.TabIndex = 14;
            this.Szin_label.Text = "Szín";
            // 
            // Rendszam_label
            // 
            this.Rendszam_label.AutoSize = true;
            this.Rendszam_label.Location = new System.Drawing.Point(638, 251);
            this.Rendszam_label.Name = "Rendszam_label";
            this.Rendszam_label.Size = new System.Drawing.Size(75, 17);
            this.Rendszam_label.TabIndex = 15;
            this.Rendszam_label.Text = "Rendszám";
            // 
            // menuStrip1
            // 
            this.menuStrip1.ImageScalingSize = new System.Drawing.Size(20, 20);
            this.menuStrip1.Items.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.Main1_stripitem,
            this.Main2_stripitem});
            this.menuStrip1.Location = new System.Drawing.Point(0, 0);
            this.menuStrip1.Name = "menuStrip1";
            this.menuStrip1.Size = new System.Drawing.Size(800, 28);
            this.menuStrip1.TabIndex = 16;
            this.menuStrip1.Text = "menuStrip1";
            // 
            // Main1_stripitem
            // 
            this.Main1_stripitem.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.Megnyitas_stripitem,
            this.Mentes_stripitem,
            this.Ujletrehozasa_stripitem});
            this.Main1_stripitem.Name = "Main1_stripitem";
            this.Main1_stripitem.Size = new System.Drawing.Size(118, 24);
            this.Main1_stripitem.Text = "File műveletek";
            // 
            // Megnyitas_stripitem
            // 
            this.Megnyitas_stripitem.Name = "Megnyitas_stripitem";
            this.Megnyitas_stripitem.Size = new System.Drawing.Size(224, 26);
            this.Megnyitas_stripitem.Text = "Megnyitás";
            this.Megnyitas_stripitem.Click += new System.EventHandler(this.Megnyitas_stripitem_Click);
            // 
            // Mentes_stripitem
            // 
            this.Mentes_stripitem.Name = "Mentes_stripitem";
            this.Mentes_stripitem.Size = new System.Drawing.Size(224, 26);
            this.Mentes_stripitem.Text = "Mentés";
            this.Mentes_stripitem.Click += new System.EventHandler(this.Mentes_stripitem_Click);
            // 
            // Ujletrehozasa_stripitem
            // 
            this.Ujletrehozasa_stripitem.Name = "Ujletrehozasa_stripitem";
            this.Ujletrehozasa_stripitem.Size = new System.Drawing.Size(224, 26);
            this.Ujletrehozasa_stripitem.Text = "Új Létrehozása";
            this.Ujletrehozasa_stripitem.Click += new System.EventHandler(this.Ujletrehozasa_stripitem_Click);
            // 
            // Main2_stripitem
            // 
            this.Main2_stripitem.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.Nevjegy_stripitem,
            this.Kilepes_stripitem});
            this.Main2_stripitem.Name = "Main2_stripitem";
            this.Main2_stripitem.Size = new System.Drawing.Size(77, 24);
            this.Main2_stripitem.Text = "Névjegy";
            // 
            // Nevjegy_stripitem
            // 
            this.Nevjegy_stripitem.Name = "Nevjegy_stripitem";
            this.Nevjegy_stripitem.Size = new System.Drawing.Size(146, 26);
            this.Nevjegy_stripitem.Text = "Névjegy";
            this.Nevjegy_stripitem.Click += new System.EventHandler(this.Nevjegy_stripitem_Click);
            // 
            // Kilepes_stripitem
            // 
            this.Kilepes_stripitem.Name = "Kilepes_stripitem";
            this.Kilepes_stripitem.Size = new System.Drawing.Size(146, 26);
            this.Kilepes_stripitem.Text = "Kilépés";
            this.Kilepes_stripitem.Click += new System.EventHandler(this.Kilepes_stripitem_Click);
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 16F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(800, 450);
            this.ControlBox = false;
            this.Controls.Add(this.Rendszam_label);
            this.Controls.Add(this.Szin_label);
            this.Controls.Add(this.Gyartaseve_label);
            this.Controls.Add(this.Tipus_label);
            this.Controls.Add(this.Data_label);
            this.Controls.Add(this.Marka_label);
            this.Controls.Add(this.Input_panel);
            this.Controls.Add(this.Modify_button);
            this.Controls.Add(this.Delete);
            this.Controls.Add(this.Add_button);
            this.Controls.Add(this.Listbox);
            this.Controls.Add(this.menuStrip1);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedSingle;
            this.MainMenuStrip = this.menuStrip1;
            this.Name = "Form1";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "Autókereskedés";
            this.Input_panel.ResumeLayout(false);
            this.Input_panel.PerformLayout();
            this.menuStrip1.ResumeLayout(false);
            this.menuStrip1.PerformLayout();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.ListBox Listbox;
        private System.Windows.Forms.Label Data_label;
        private System.Windows.Forms.Button Add_button;
        private System.Windows.Forms.TextBox Marka_textbox;
        private System.Windows.Forms.Button Delete;
        private System.Windows.Forms.Button Modify_button;
        private System.Windows.Forms.TextBox Tipus_textbox;
        private System.Windows.Forms.TextBox Gyartaseve_textbox;
        private System.Windows.Forms.TextBox Szin_textbox;
        private System.Windows.Forms.TextBox Rendszam_textbox;
        private System.Windows.Forms.Panel Input_panel;
        private System.Windows.Forms.Label Marka_label;
        private System.Windows.Forms.Label Tipus_label;
        private System.Windows.Forms.Label Gyartaseve_label;
        private System.Windows.Forms.Label Szin_label;
        private System.Windows.Forms.Label Rendszam_label;
        private System.Windows.Forms.MenuStrip menuStrip1;
        private System.Windows.Forms.ToolStripMenuItem Main1_stripitem;
        private System.Windows.Forms.ToolStripMenuItem Megnyitas_stripitem;
        private System.Windows.Forms.ToolStripMenuItem Mentes_stripitem;
        private System.Windows.Forms.ToolStripMenuItem Ujletrehozasa_stripitem;
        private System.Windows.Forms.ToolStripMenuItem Main2_stripitem;
        private System.Windows.Forms.ToolStripMenuItem Nevjegy_stripitem;
        private System.Windows.Forms.ToolStripMenuItem Kilepes_stripitem;
    }
}

