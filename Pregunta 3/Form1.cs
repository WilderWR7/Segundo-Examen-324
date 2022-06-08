using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Collections;

namespace WindowsFormsApplication8
{
    public partial class Form1 : Form
    {
        Bitmap bmp;
        int pR, pG, pB;
        Stack miPila = new Stack();
       
        Random rnd = new Random();
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            openFileDialog1.Filter = "Todos *.*|";
            openFileDialog1.ShowDialog();
            bmp = new Bitmap(openFileDialog1.FileName);
            pictureBox1.Image = bmp;
        }

        private void button7_Click(object sender, EventArgs e)
        {
            Bitmap bmpR = new Bitmap(bmp.Width, bmp.Height);
            Stack puntos = new Stack();

            int mR = 0, mG = 0, mB = 0, r=rnd.Next(0, 256), g=rnd.Next(0, 256), b = rnd.Next(0, 257); 
            Color c = new Color();

            for (int i = 0; i < bmp.Width - 10; i = i + 10) {
                for (int j = 0; j < bmp.Height - 10; j = j + 10)
                {
                    mR = 0;
                    mG = 0;
                    mB = 0;
                    for (int ki = i; ki < i + 10; ki++)
                        for (int kj = j; kj < j + 10; kj++)
                        {
                            c = bmp.GetPixel(ki, kj);
                            mR = mR + c.R;
                            mG = mG + c.G;
                            mB = mB + c.B;
                        }
                    mR = mR / 100;
                    mG = mG / 100;
                    mB = mB / 100;

                    c = bmp.GetPixel(i, j);

                    if ((pR - 5 <= mR && mR <= pR + 5) && (pG - 5 <= mG && mG <= pG + 5) && (pB - 5 <= mB && mB <= pB + 5))
                    {
                        for (int ki = i; ki < i + 10; ki++)
                            for (int kj = j; kj < j + 10; kj++)
                            {
                                puntos.Push(ki + "," + kj);

                            }

                    }
                    else
                    {
                        for (int ki = i; ki < i + 10; ki++)
                            for (int kj = j; kj < j + 10; kj++)
                            {
                                c = bmp.GetPixel(ki, kj);
                                bmpR.SetPixel(ki, kj, Color.FromArgb(c.R, c.G, c.B));
                            }
                    }
                }
            }
                
            int lp = puntos.Count;
            miPila.Push(puntos);
            if (miPila.Count != 0 )
            {
                int t1 = miPila.Count;
                foreach (Stack pila in miPila)
                {
                    int ra = rnd.Next(0, 256), ga = rnd.Next(0, 256), ba = rnd.Next(0, 256);                    
                    Stack miPil = new Stack();
                    miPil = (Stack)pila;
                    foreach (String pila2 in miPil)
                    {
                        string val = (string)pila2;

                        string[] lista = val.Split(',');

                        int x = Convert.ToInt16(lista[0]);
                        int y = Convert.ToInt16(lista[1]);

                        bmpR.SetPixel(x, y, Color.FromArgb(ra, ga,ba));
                    }
                  }
            }
            
            pictureBox2.Image = bmpR;
        }
    }
}
