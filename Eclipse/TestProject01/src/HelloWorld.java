
public class HelloWorld {

	public static void main(String[] args) {
		// TODO 自動生成されたメソッド・スタブ
		
		int c =10;
		String d = c>=0 ? "プラス" : "マイナス";
		System.out.println(d);
		
		
		int e=2;
		String f = e%2==0 ? "偶数" : "奇数";
		System.out.println(f);
		
		
		for(int i=0; i<=5; i++){
			String g = i%2==0 ? "☆" : "★";
			System.out.println(g);
		}
		
		
		int z=1;
		while(z<=10){
			System.out.println(z);
			z+=2;
		}
		
		
		int y=5;
		do {
			System.out.println(y);
			y--;
		}while(y>0);
		
	}
	
}
