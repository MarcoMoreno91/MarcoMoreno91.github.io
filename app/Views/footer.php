<footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Moreno technology solutions system <?php echo date('Y');?></div>
                            <div>
                                <a href="https://www.facebook.com/Calzado-LADY-MARTH-356092531738501" target="_blank">Facebook</a>
                                &middot;
                                <a href="https://www.instagram.com/?hl=es" target="_blank">Instagram</a>
                                &middot;
                                <a href="https://api.whatsapp.com/send?phone=4776876253&text=Bienvenidos%20a%20Calzado%20Yazmin%20Valentina%20." target="_blank">WhatsApp</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="<?php echo base_url();?>/js/jquery-3.5.1.slim.min.js"></script>
        <script src="<?php echo base_url();?>/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url();?>/js/scripts.js"></script>
        <script src="<?php echo base_url();?>/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url();?>/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?php echo base_url();?>/assets/demo/datatables-demo.js"></script>
        <script>
        $('#modal-confirma').on('show.bs.modal', function(e){

            $(this).find('.btn-ok').attr('href',$(e.relatedTarget).data('href'));
        });
        </script>
    </body>
</html>