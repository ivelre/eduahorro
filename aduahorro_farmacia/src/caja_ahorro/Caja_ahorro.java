
package caja_ahorro;

import java.awt.FlowLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.KeyAdapter;
import java.awt.event.KeyEvent;
import javax.swing.BoxLayout;
import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JOptionPane;
import javax.swing.JPanel;
import javax.swing.JPasswordField;
import javax.swing.JTextField;



public class Caja_ahorro extends JFrame
{
    JPanel panel, panel1, panel2,panel3;
    JLabel numero,contsñ;
    JTextField usuario;
    JPasswordField password;
    JButton aceptar;
      
    int numeroEmplado;
    String contraseña;
    boolean bandera;
    
    public Caja_ahorro()
    {
        super("Login Emplado(a)");

        
        interfaz();
        
        setVisible(true);
        setSize(300, 150);
        setLocationRelativeTo(null);
    }
    
    void interfaz()
    {
        panel= new JPanel();
        panel.setLayout(new BoxLayout(panel, BoxLayout.Y_AXIS));
        panel1= new JPanel(new FlowLayout());
        panel2= new JPanel(new FlowLayout());
        panel3= new JPanel(new FlowLayout());
        
        numero= new JLabel("Numero de emplado(a):");
        panel1.add(numero);
        usuario= new JTextField(10);
        panel1.add(usuario);
        contsñ= new JLabel("Password:                        ");
        panel2.add(contsñ);
        password= new JPasswordField(10);
        password.addKeyListener(new oyenteEnter());
        panel2.add(password);
        aceptar= new JButton("Aceptar");
        aceptar.addActionListener(new oyente());
        aceptar.addKeyListener(new oyenteEnter());
        panel3.add(aceptar);
        panel.add(panel1);
        panel.add(panel2);
        panel.add(panel3);
        
        add(panel);
    }
    
    
    void recolectar_datos()
    {
        String n=usuario.getText();
        contraseña=password.getText();
        
        try {
            numeroEmplado=Integer.parseInt(n);
            if((usuario.getText().trim().isEmpty())||(password.getText().trim().isEmpty()))
            {
                JOptionPane.showMessageDialog(null, "Error faltan datos");
                usuario.setText("");
                password.setText("");
                bandera=false;
            }
            else
            {
                bandera=true;
            }
            
            
        } catch (Exception e) 
        {
            JOptionPane.showMessageDialog(null, "Error checa tus datos");
            usuario.setText("");
            password.setText("");
            bandera=false;
        }
    }
    
    class oyente implements ActionListener
    {

        @Override
        public void actionPerformed(ActionEvent e) 
        {
            recolectar_datos();
            if(bandera)
            {
                new cont();
                dispose();
            }
        }
        
    }
    
    class oyenteEnter extends KeyAdapter
    {
        public void keyPressed(KeyEvent e)
       {
           if(e.getKeyCode()==KeyEvent.VK_ENTER)
           {

                recolectar_datos();
                if(bandera)
                {
                    new cont();
                    dispose();
                }
           }
       }
    }

    public static void main(String[] args) 
    {
        new Caja_ahorro();
        new conexion();
    }
    
}
