<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ("header.php"); ?>
    <title>Vagrant Tutorial</title>

</head>

<body>
<!-- Navigation -->
<?php include ("navigation.php"); ?>
<!-- End -->




    <!-- End Sidebar -->

    <div class="wrapper">
        <div class="container-fluid">
            <div class="col-lg-10">

            <h1 style="text-align: center">Vagrant</h1><br>
            <h4>What the heck is it?</h4>
            <blockquote>To understand vagrant we must first understand virtualization.  Vagrant is a command line tool that works in conjunction with virtualisation software like VirtualBox or VMWare.  So, vagrant allows you to configure reproducible, portable environments.</blockquote>
            <h4>What do we mean by “reproducible portable environments?” </h4>
            <blockquote>Let’s imagine a scenerio to serve as an example.  You are a web developer working with a LAMP stack (Linux, Apache, MySQL, PHP)  Now say you want to work on your project, but, you aren’t on your main computer.  You have to spend time installing apache, MySQL and PHP.  However, if you are using a vagrant environment you can save a preconfigured environment and boot up a virtual disk that already has dependencies involved.<br>
            <br>   This is a trivial example.  Have you ever tried to work with a rails environment?  If this is the case you might  be working with different versions of rails, different gems, different databases etc.  The configuration of a new system would be extremely time consuming, but, with vagrant all you have to say is vagrant up and you’ve got a new virtual machine.</blockquote>
            <h4>But, this only scratches the surface of what you can do with vagrant</h4>
            <blockquote>You can share custom boxes with other developer, you can publish you work live to the web for client demos, network  a bunch of vagrant boxes together or work with a multi-machine setup.  Additionally, provisioning tools such as shell scripts, chef, puppet or unusable can be used to automatically configure the software on your machine.
                “whether you're working on Linux, Mac OS X, or Windows, all your team members are running code in the same environment, against the same dependencies, all configured the same way. Say goodbye to "works on my machine" bugs.”
            </blockquote>
            <h2>Create a vagrant machine in 8 Steps</h2><br>
                <div class="sect">
                    <h4>Step1: First let's download virtualBox<span class="inlineCode">sudo apt-get install virtualbox</span></h4>
                    <img src="img/downloadVirtualBox.png" height="300" width="650">
                </div>
                <div class="sect">
                    <h4>Step 2: Next let's install vagrant<span class="inlineCode">sudo apt-get install vagrant</span></h4>
                    <img src="img/downloadVagrant.png" height="300" width="650">
                </div>
                <div class="sect">
                    <h4>Step3: Next let's make a directory for our vagrant boxes
                    <span class="inlineCode">mkdir vagrantBoxes</span>
                    Then we will change to that directory
                    <span class="inlineCode">cd vagrantBoxes/</span></h4>
                    <img src=" img/skitch.jpeg">
                </div>
                <div class="sect">
                    <h4>Step 4: Now we are ready to start a vagrant session with
                    <span class="inlineCode">vagrant init hashicorp/precise32</span></h4>
                    <p>This will place a vagrant file in our <span class="inlineCode">vagrantBoxes/</span> directory
                    However, in this example I had to use a modified command shown below. If you run into an error saying that <span class="inlineCode">the box 'hasicorp/precise32 could not be found</span> please check this <a href="https://github.com/mitchellh/vagrant/issues/5016">link</a> for the solution I used here</p>
                    <img src=" img/6_vagrant_init_precise32.png" width="650">
                </div>
                <div class="sect">
                    <h4>Step 5: we have just created a <span class="inlineCode">vagrantFile</span> which contains configuration settings for your virtual machine
                    so let's examine the vagrant file <span class="inlineCode">vim vagrantFile</span></h4>
                    <p>This is only a small part of the configuration file, but, we can see that our box is going to use <span class="inlineCode">hashicorp/precise32</span> which is the 32-bit version of Ubuntu 13.04 precise pangolin.  Other distributions can be found at <a href="https://atlas.hashicorp.com/boxes/search">HashiCorp's Atlas box catalog</a> </p>
                    <img src="img/vagrantFile.png">

                </div>
                <div class="sect">
                    <h4>Step 8: Now we are ready to boot our machine up using<span class="inlineCode">vagrant up</span></h4>
                    <img src="img/7_vagrant_up.png">
                </div>
                <div class="sect">
                    <h4>Finally we are ready to ssh into our new box <span class="inlineCode">vagrant ssh</span></h4>
                    <img src="img/8_vagrant_ssh.png">
                </div>
                <div class="sect">
                    <h4>Step 9: Congratulations! You now have your very own vagrant box set up.  Have a look around.  Feel free to crash the machine and when you are done just use <span class="inlineCode">vagrant destroy</span>to destroy the box and start over</h4>
                    <blockquote>
                    <p>Vagrant is a great utility that can be used to easily create virtual environments in the command line.  Great use cases include
                            <ul>
                        <li>Use different distrubutions of Ubuntu</li>
                        <li>Duplicate production environments quickly and efficiently</li>
                        <li>Maintain seperate production environments with different dependencies</li>
                        <li>Testing</li>
                        <li>Sharing</li>
                        <li>etc.</li>
                    </ul>
                    <p>
                        Be sure to check out the official documentation on vagrants <a href="www.vagrant.com">website</a>
                    </p>
                        </blockquote>
                </div>
            </div>
        </div>
    </div>
</div>
<!-------------- footer --------------------------->


<!-- Syntax highlighter -->
<script src="js/jquery.syntaxhighlighter.js"></script>
<script src="js/prism.js"></script>
<script src="js/bootstrap.js"></script>
<!-- /#wrapper -->

<!-- jQuery Version 1.11.0 -->
<!--<script src="js/jquery-1.11.0.js"></script>-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
<script type="text/javascript">$.syntaxhighlighter.init();</script>

</body>
</html>