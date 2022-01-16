<?php ?>

        <script>
            $("#listShow").cPager({
                pageSize: 8,
                pageid: "pager",
                itemClass: "catprod",
                pageIndex: 1
            });
        </script>

    </section>

    <div id="modalContainer"></div>

    <script src="/imagenes/public/plugins/zoomImg.js"></script>
    <script src="/imagenes/public/plugins/modalDeploy.js"></script>
    <script src="/imagenes/public/plugins/bootstrap-typeahead.min.js"></script>
    
<?php include ROOT . 'public' . DS . 'js' . DS . 'imgDeleteScripts.php';