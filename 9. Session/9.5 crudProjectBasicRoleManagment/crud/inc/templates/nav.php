
    <div class="row">
        <div class="column column-75">
            <div class="float-left">
                <a href="/index.php?task=report">All Students</a>
                <?php if(hasPrivilege()): ?>
                <a href="/index.php?task=add">Add Student</a>
                <?php endif; ?>
                <?php if(isAdmin()): ?>
                <a href="/index.php?task=seed">Seed Data</a>
                <?php endif; ?>
            </div>
        </div>

        <?php if(!$_SESSION['loggedin']): ?>
        <div class="column column-25">
            <div class="float-right">
                <a href="auth.php">Log In</a>
            </div>
        </div>

        <?php else: ?>
            <div class="float-right">
                <a href="auth.php?logout=true">Log Out (<?php echo $_SESSION['role'] ?>)</a>
            </div>
        <?php endif; ?>
    </div>


