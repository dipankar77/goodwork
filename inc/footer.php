<hr>
<h6 class="text-center mt-2 mb-2">&copy Dipankar Sarkar ji, <?php echo date("Y"); ?></h6>
</div>

<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.flipcountdown.js"></script>
<script>
    $(document).ready(function() {
        $('#login_button').click(function() {
            var username = $('#username').val();
            var password = $('#password').val();
            if (username != '' && password != '') {
                $.ajax({
                    url: "action.php",
                    method: "POST",
                    data: {
                        username: username,
                        password: password
                    },
                    success: function(data) {
                        //alert(data);  
                        if (data == 'No') {
                            alert("Wrong Data");
                        } else {
                            $('#loginModal').hide();
                            location.href = "admin.php";
                        }
                    }
                });
            } else {
                alert("Both Fields are required");
            }
        });
        $('#logout').click(function() {
            var action = "logout";
            $.ajax({
                url: "action.php",
                method: "POST",
                data: {
                    action: action
                },
                success: function() {
                    location.href = "index.php";
                }
            });
        });
    });
    </script>
</body>

</html>