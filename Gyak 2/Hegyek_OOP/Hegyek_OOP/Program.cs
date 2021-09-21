using System;
using System.Collections.Generic;
using System.IO;

namespace Hegyek_OOP
{
    class Program
    {
        static void Main()
        {
            List<Hegy> hegyek = new List<Hegy>();

            StreamReader reader = new StreamReader("hegyekMo.txt");
            reader.ReadLine();
            while (!reader.EndOfStream)
            {
                hegyek.Add(new Hegy(reader.ReadLine().Split(';')));
            }
            reader.Close();

            Console.WriteLine("3. Feladat: Hegycsúcsok száma: " + hegyek.Count + " db");

            float avg = 0;
            foreach (var item in hegyek) { avg += item.Magassag; }
            Console.WriteLine("4. Feladat: Hegycsúcsok átlagos magassága: " + (avg /= hegyek.Count) + " m");

            int magasabb = 0;
            int ind = 0;
            for (int i = 0; i < hegyek.Count; i++)
            {
                if (hegyek[i].Magassag > magasabb)
                {
                    magasabb = hegyek[i].Magassag;
                    ind = i;
                }
            }
            Console.WriteLine("5. Feladat: A legmagasabb hegycsúcs adatai:\n\tNév: " + hegyek[ind].Hegycsucs_neve + "\n\tHegység: " + hegyek[ind].Hegyseg + "\n\tMagasság: " + hegyek[ind].Magassag + " m");

            Console.Write("6.Feladat: Kérek egy magasságot: ");
            int input = int.Parse(Console.ReadLine());
            bool van = false;
            foreach (var item in hegyek)
            {
                if(item.Magassag > input)
                {
                    Console.WriteLine("Van " + input + " m-nél magasabb hegycsúcs a " + item.Hegycsucs_neve);
                    van = true;
                    break;
                }
            }
            if (!van) { Console.WriteLine("Nincs " + input + " m-nél magasabb hegycsúcs!"); }

            Console.ReadKey();
        }
    }
}
