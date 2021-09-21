namespace Hegyek_OOP
{
    class Hegy
    {
        private string hegycsucs_neve;
        private string hegyseg;
        private int magassag;

        public string Hegycsucs_neve { get => hegycsucs_neve; set => hegycsucs_neve = value; }
        public string Hegyseg { get => hegyseg; set => hegyseg = value; }
        public int Magassag { get => magassag; set => magassag = value; }

        public Hegy(string[] darabok)
        {
            hegycsucs_neve = darabok[0];
            hegyseg = darabok[1];
            magassag = int.Parse(darabok[2]);
        }
    }
}
