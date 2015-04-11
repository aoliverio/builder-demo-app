<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo $this->Html->url('/'); ?>"><?php echo Configure::read('Builder.app_name') ?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo $this->Html->url('/'); ?>">Getting started</a></li>
                <li><a href="<?php echo $this->Html->url('/'); ?>">Scaffold</a></li>
                <li><a href="<?php echo $this->Html->url('/'); ?>">Helpers</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Plugins <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Main plugins</li>
                        <li><a href="<?php echo $this->Html->url('/pages/blog'); ?>">BlogManager</a></li>
                        <li><a href="<?php echo $this->Html->url('/pages/cms'); ?>">CmsManager</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo $this->Html->url('/user/logout') ?>"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a></li>
            </ul>
        </div>
    </div>
</nav>