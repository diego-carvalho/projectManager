<nav class="navbar navbar-default navbar-fixed-top" style="background-color:#3c8dbc; color:white;">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button onmouseover="this.style.backgroundColor='#006db9'" onmouseout="this.style.backgroundColor=''" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" >
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar" style="background-color:white;"></span>
                <span class="icon-bar" style="background-color:white;"></span>
                <span class="icon-bar" style="background-color:white;"></span>
            </button>
            <?php
            echo  $this->Html->link(
                    'Project Manager',
                    [
                    'controller' => 'Home', 'action' => 'index', 'prefix' => false
                    ],
                    [
                        'class' => 'navbar-brand',
                        'style' => 'color:white;'
                    ]);
            ?>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php
                echo "<li>". $this->Html->link(
                        'Login',
                        [
                            'controller' => 'Users', 'action' => 'login', 'prefix' => 'admin'
                        ],[
                            'style' => 'color:white;'
                        ])."</li>";
                ?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>