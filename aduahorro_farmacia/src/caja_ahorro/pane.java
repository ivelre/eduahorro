
package caja_ahorro;

import java.awt.Dimension;
import java.awt.Graphics;
import javax.swing.ImageIcon;
import javax.swing.JPanel;

public class pane extends JPanel
{
    public pane()
    {
        setSize(100, 100);
    }
    
    @Override
    public void paintComponent(Graphics g)
    {
        Dimension tamano= getSize();
        ImageIcon imagenFondo= new ImageIcon(getClass().getResource("/fondos/x.jpg"));
        g.drawImage(imagenFondo.getImage(), 0, 0, tamano.width, tamano.height,null);
        setOpaque(false);
        super.paintComponent(g);
    }
    
}
