<script type="text/javascript">
    function disconnect() {
        <?php unlink('keeplog.json'); ?>
    }
</script>

<a id='disconnect' href=\"/projetweb/front/index.php\" class=\"log\">Deconnexion</a>";

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script language="javascript">
    $(function(){
        function loadNum()
        {
            $.ajax({
                url : "/projet/back/checkdata.php",
                type : "POST",
                success : function(response){
                    console.log(response);
                }
            });
            setTimeout(loadNum, 1000);
        }
        loadNum();
    });
</script>