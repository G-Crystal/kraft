<?php 
    include_once("config.php");
?>

<div class="header-div">

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="logo-div">
                <a class="navbar-brand" href="/"><img src="<?php echo IMAGE_URL; ?>/logo.png" alt="<?php echo SITE_TITLE; ?>" title="<?php echo SITE_TITLE; ?>" border="0" /></a>
                <span class="hidden-sm hidden-xs">|&nbsp;<?php echo LOGO_TITLE;?></span>
            </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="row">
                <div class="header-nav" style="display:none;">
                    <span>
                        <select id="language_opt">
                            <option value="en"><?php echo ABBREBIATION_ENGLISH;?></option>
                            <option value="en"><?php echo ABBREBIATION_FRENCH;?></option>
                        </select>
                    </span>
                    <span><a href="#"><?php echo OFFERS;?></a></span>
                    <span class="hidden-sm hidden-xs">|</span>
                    <span><a href="#"><?php echo RECIPE_BOX;?></a></span>
                    <span class="hidden-sm hidden-xs">|</span>
                    <span><a href="#"><?php echo SIGN_UP;?></a></span>
                </div>

                <ul class="nav navbar-nav header-nav">
                    <li><a href="#"><?php echo OFFERS;?></a></li>
                    <li><a href="#"><?php echo RECIPE_BOX;?></a></li>
                <?php if (isLoggedIn()) { ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo MY_ACCOUNT;?> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><span class="member"><?php echo $_SESSION['FirstName']; ?></span></a></li>
                            <li><a class="logout" href="#"><?php echo LOGOUT; ?></a></li>
                        </ul>
                    </li>
                <?php }else{ ?>
                    <li><a class="menu" data-toggle="modal" href="#signupModal"><?php echo SIGN_UP; ?></a></li>
                <?php } ?>
                </ul>

                <form name="searchfrm" id="searchfrm" class="navbar-form navbar-left" action="<?php echo SITE_URL; ?>search.php" method="get" autocomplete="off">
                    <div class="form-group">
                        <input type="text" id="searchtext" name="searchtext" class="form-control" onKeyPress="ajaxsearch(this.value)" value="<?php echo @$stext; ?>" placeholder="<?php echo SEARCH_MSG; ?>">
                        <input type="hidden" name="action" value="search" />
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

</div>
