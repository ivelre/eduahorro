package caja_ahorro;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;


public class conexion
{
    
    private Connection con=null;
    private Statement stm;
    private ResultSet rs;
    
    public Connection conexion()
    {
        try {
            Class.forName("com.mysql.jdbc.Drivers");
            con=DriverManager.getConnection("mysql.hostinger.mx","u715840912_eduah","edu10923ik");//url,usuario,password
            
        } catch (Exception e) {
            System.out.println("no se conecto");
        }
        return con;
        
    }
    
    public ResultSet consulta(String tabla) throws SQLException 
    {
        rs=stm.executeQuery("select * from"+tabla);
        return rs;
    }
    
    public void cerrarConexion(Connection con)
    {
        try {
            con.close();
        } catch (Exception e) {
        }
    }
         
}
