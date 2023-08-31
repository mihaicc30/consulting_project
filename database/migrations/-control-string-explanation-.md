later to be deleted

controll string - 20 digits long -
0- account state - active 1 / locked 0
1- user group - personal 0 / business 1
2- user plan - topup 0 / starter 1 / basic 2 / premium 3
3- yearly - no 0 / yes 1
4- number of users? 0 is 1-9 users / 1 is 10-19 users / 2 is 20-29 users / ... / 9 is 90-100 users /
5- allowed package size - 0 50mb / 1 100mb/ 2 150mb / 3 200mb /..... / 9 subscription (apparently unlimited)
6- desktop user - 0 allowed / 1 denied
7- web user - 0 allowed / 1 denied
8- tokens 0 to 9
9- tokens 0 to 9  --enabing again double digit tokens
10-                -- reserving space, maybe want three digit token
11-d--------
12-d       |    \
13-m       |-----\  expiry date if user subscribed to a plan, later on to check with char18 is payment is recurring or not
14-m       |-----/
15-y       |    /
16-y--------
17- 0-no / 1-yes   --- payment recurring
18-
19- last number - admin ? - 0 no - 1 yes




if payment not recurring=> check expiry date => if pressent date is past ex.date => change controlstring to a topup plan => remove the expiry date



******//block only on desktop app --- not web**********