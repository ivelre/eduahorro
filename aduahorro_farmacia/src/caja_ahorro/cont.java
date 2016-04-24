
package caja_ahorro;

import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import javax.swing.JDesktopPane;
import javax.swing.JFrame;
import javax.swing.JMenu;
import javax.swing.JMenuBar;
import javax.swing.JMenuItem;

public class cont extends JFrame
{
    JMenuBar menu;
    JMenu opciones;
    JMenuItem abono;
    static pane dskpanel;

    
    public cont()
    {
        super("Caja de ahorro");
        
        
        dskpanel = new pane(); 
        dskpanel.repaint();
        add(dskpanel);

        
        interfaz();
        
        setVisible(true);
        setExtendedState(MAXIMIZED_BOTH);
        setDefaultCloseOperation(EXIT_ON_CLOSE);
    }
    
    void interfaz()
    {        
        menu= new JMenuBar();
        setJMenuBar(menu);
        
        opciones= new JMenu("Opciones");
        menu.add(opciones);
        
        abono= new JMenuItem("Abono");
        abono.addActionListener(new oyente());
        opciones.add(abono);
    }
    
    class oyente implements ActionListener
    {

        @Override
        public void actionPerformed(ActionEvent e) 
        {
            switch(e.getActionCommand())
            {
                case "Abono":
                    dskpanel.add(new abono());
                    break;
            }
        }
        
    }
}
