
                                    <!--begin::Actions-->
                                    <div class="d-flex align-items-center gap-2 gap-lg-3">
                                        
                                        <!--begin::My Documents button-->
                                        <a href="<?php echo esc_url( site_url('/my-documents/') ); ?>" class="btn btn-sm fw-bold btn-secondary">
                                            My Documents
                                        </a>
                                        <!--end::My Documents button-->

                                        <!--begin::New Document button-->
                                        <a href="<?php echo esc_url( site_url('/choose-document/') ); ?>" class="btn btn-sm fw-bold btn-primary">
                                            Create Document
                                        </a>
                                        <!--end::New Document button-->                                        

                                        <!--begin::My Documents button-->
                                        <?php
                                          // Если в URL есть ?post_id=, берём его, иначе — по-умолчанию ID текущей записи
                                          $doc_id = isset($_GET['post_id'])
                                            ? absint($_GET['post_id'])
                                            : get_the_ID();
                                        ?>
                                        <a href="<?php echo esc_url( admin_url('admin-ajax.php?action=generate_pdf&doc_id='.$doc_id) );?>"
                                           class="btn btn-primary btn-sm fw-bold" target="_blank" download>
                                          Download PDF
                                        </a>
                                        <!--end::My Documents button-->
                                    </div>
                                    <!--end::Actions-->