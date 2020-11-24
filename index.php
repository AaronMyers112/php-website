<body>
    <!-- random title  -->
    <div class="wrapper">
        <?php
            session_start();
            $_SESSION['login'] = false;
            $title_name = array(
                'John Doe',
                'Peanut',
                '01001101 01100001 01110100 01110100',
                'Bee',
                '127.0.0.1',
                'User',
                'User',
                'User',
                'User',
                'User',
            );
            $title_selector = rand(0, 9);

            echo '<h1>Welcome ' . $title_name[$title_selector] . '!</h1>';
            function login($username = 'User', $password = 'admin') {  
                if($_POST['username'] == $_SESSION['title_name'] || $_POST['password'] != 'admin') {
                    return false;
                }
                else {
                    return true;
                }
            }
            $_SESSION['title_name'] = $title_name[$title_selector];
            if(!$_SESSION['login']){
        ?>
        
        <form action="" method="post">
            Username:<input placeHolder="username" name="username"/>
            Password:<input placeHolder="password" name="password"/>
            <input type="submit" />
        </form>

        <?php }
            else{
                echo'<h1>Login Successful</h1>'
        ?>
        <h1>Login Successful</h1>
        <?php 
            }
        ?>
    </div>
</body>
