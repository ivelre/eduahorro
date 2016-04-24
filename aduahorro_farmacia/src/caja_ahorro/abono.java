
package caja_ahorro;

import java.awt.BorderLayout;
import java.awt.FlowLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.KeyAdapter;
import java.awt.event.KeyEvent;
import javax.swing.JButton;
import javax.swing.JInternalFrame;
import javax.swing.JLabel;
import javax.swing.JOptionPane;
import javax.swing.JPanel;
import javax.swing.JTextField;




public class abono extends JInternalFrame
{
    JPanel panel,panel1,panel2,panel3;
    JLabel ntarj, datos,cantidad;
    JTextField n_tarjeta, monto;
    JButton aceptar,aceptar1;
    
    public abono()
    {
        super("Abono a cuenta de ahorro");
        
        interfaz();
        
        setVisible(true);
        setSize(600, 300);
        setResizable(true);
        setClosable(true);
        
                
    }
    
    void interfaz()
    {
        panel= new JPanel(new BorderLayout());
        panel1= new JPanel(new FlowLayout());
        panel2= new JPanel(new FlowLayout());
        panel3= new JPanel(new FlowLayout());
        
        ntarj= new JLabel("No. Tarjeta");
        n_tarjeta= new JTextField(15);
        n_tarjeta.addKeyListener(new oyenteEnter());
        aceptar= new JButton("Aceptar");
        aceptar.addActionListener(new oyente());
        panel1.add(ntarj);
        panel1.add(n_tarjeta);
        panel1.add(aceptar);
        datos= new JLabel(" ");
        panel2.add(datos);
        cantidad= new JLabel("$");
        panel3.add(cantidad);
        monto= new JTextField("00.00",10);
        monto.addKeyListener(new oyenteEnter2());
        panel3.add(monto);
        aceptar1= new JButton("Aceptar");
        aceptar1.addActionListener(new oyente2());
        panel3.add(aceptar1);
        
        
        panel.add(panel1, BorderLayout.NORTH);
        panel.add(panel2, BorderLayout.WEST);
        panel.add(panel3, BorderLayout.EAST);
        add(panel);
        
    }
    
    void consulta_bd()
    {
        int numero_tarjeta;
        try 
        {
            numero_tarjeta=Integer.parseInt(n_tarjeta.getText());
            datos.setText("Alizon Gabriela Mendoza Arredondo");
            n_tarjeta.setText("");
            
        } catch (Exception e) {
            JOptionPane.showMessageDialog(null, "No se encontraron los datos");
        }
                
    }
    
    class oyente implements ActionListener
    {

        @Override
        public void actionPerformed(ActionEvent e) {
            
            consulta_bd();
        }
        
    }
    
    class oyenteEnter extends KeyAdapter
    {
        public void keyPressed(KeyEvent e)
       {
           if(!datos.getText().trim().isEmpty())//limpia la etiqueta de los datos del cliente
           {
               datos.setText("");
           }
           
           if(e.getKeyCode()==KeyEvent.VK_ENTER)
           {
               consulta_bd();
           }
       }
    }
    
    class oyente2 implements ActionListener
    {

        @Override
        public void actionPerformed(ActionEvent e) {
            
            if(monto.getText().trim().isEmpty())//limpia la etiqueta de los datos del cliente
           {
               JOptionPane.showMessageDialog(null, "No se ha introducido el monto");
           }
           else
           {
               monto.setText("");
               datos.setText("");
               JOptionPane.showMessageDialog(null, "Imprmiendo recibo");
           }
            
        }
        
    }
    
    class oyenteEnter2 extends KeyAdapter
    {
        public void keyPressed(KeyEvent e)
       {
           
           if(e.getKeyCode()==KeyEvent.VK_ENTER)
           {
               if(monto.getText().trim().isEmpty())//limpia la etiqueta de los datos del cliente
               {
                   JOptionPane.showMessageDialog(null, "No se ha introducido el monto");
               }
               else
               {
                 monto.setText("");
                 datos.setText("");
                 JOptionPane.showMessageDialog(null, "Imprmiendo recibo");
               }
               
           }
       }
    }
    
}
