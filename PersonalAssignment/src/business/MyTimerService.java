package business;

import java.util.logging.Logger;

import javax.annotation.Resource;
import javax.ejb.Schedule;
import javax.ejb.Stateless;
import javax.ejb.Timeout;
import javax.ejb.Timer;
import javax.ejb.TimerService;

@Stateless
public class MyTimerService {

	private static final Logger logger= Logger.getLogger("business.MyTimerService");
	@Resource
	private TimerService timerService;
    /**
     * Default constructor. 
     */
    public MyTimerService() {
        // TODO Auto-generated constructor stub
    }
	
    public void setTimer(long interval) {
    	
    	timerService.createTimer(1000, "My Time");
    	
    }
    @Timeout
    public void programmicTimer(Timer timer) {
    	
    	logger.info("This is my programmicTimer method");
    	
    }
    
    
	@SuppressWarnings("unused")
	@Schedule(second="0", minute="*", hour="0-23", dayOfWeek="Mon-Fri",
      dayOfMonth="*", month="*", year="*", info="MyTimer")
    private void scheduledTimeout(final Timer t) {
        logger.info("@Schedule called at: " + new java.util.Date());
    }
}