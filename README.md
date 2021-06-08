# Code-Test
1. TeHelper - willExpireAt method has multiple conditions, but having x <= 90 on the if condition will already satisfy other conditions 
like x <= 24 and 24 > x <= 72. Need to update the conditional logic.

2. UserRespository - createOrUpdate method do so much stuff and returns only the model which can be hard to tell what happen to the other updates. Also it takes request as parameter which will be a problem on creating a test.