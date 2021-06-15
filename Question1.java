/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Test;

/**
 *
 * @author nick0
 */
class Car{ 
	public String brand;
	public String color;
        public String type;
        public void show(){
               System.out.println("MotorCycle Type: "+type);
		System.out.println(type +" Brand = "+brand);
		System.out.println(type +" Color = "+color);
	}
}
class MotorCycle extends Car{
	public void create(String a,String b,String c){
		this.brand=a;
		this.color=b;
                this.type=c;
	}
}
public class Class01 {

	public static void main(String[] args) {
		MotorCycle M1=new MotorCycle(); //利用子類別建立 bb物件
		M1.create("A1234", "Red","Z7"); //呼叫父類別中的函數
		M1.show();
                MotorCycle M2=new MotorCycle(); //利用子類別建立 bb物件
		M2.create("B7934", "Black","G3"); //呼叫父類別中的函數
		M2.show();
	}
}