        function fun(string) {
            if (string <= 9) {
                return "0" + string;
            } else {
                return "" + string;
            }
        }

        window.onload = function () {
            var aadiv = document.getElementById('div19');
            var test = aadiv.getElementsByTagName('img');

            function times() {
                for (var i = 0; i < test.length; i++) {
                    if (i%2 == 0)
                        test[i].src = '../Count_Visitor/images/11.gif';
                    else
                        test[i].src = '../Count_Visitor/images/12.gif';
                }
            }

            function time() {

                var date = new Date();
                var str = fun(date.getHours()) + "p" + fun(date.getMinutes()) + "p" + fun(date.getSeconds());
                for (var i = 0; i < test.length; i++) {

                    test[i].src = '../Count_Visitor/images/' + str[i] + '.png';
                }


            }

            times();
            var timerid = setTimeout(function () { //loading video
                setInterval(time, 1000);
                time();
            }, 3000)

        }