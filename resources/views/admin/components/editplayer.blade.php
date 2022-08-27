<div class="modal fade" id="edit_team" tabindex="-1" role="dialog" aria-labelledby="edit_team" aria-hidden="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar time</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                        <form class="row" id="form_edit" method="put" novalidate>
                            @csrf
                            {{ method_field('put') }}
                            <input type="text" id="player_id" hidden>
                            <div class="field item form-group col-12">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Nome do Jogador<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="name" id="name" placeholder="" required="required" />
                                </div>
                            </div>
                            <div class="field item form-group col-12">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Nº da Camisa do Jogador<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="number" id="number" placeholder="" required="required" />
                                </div>
                            </div>

                                <div class="d-flex col-12 justify-content-center mt-3">
                                    <div class="col-md-6 offset-md-3">
                                        <button type='submit' class="btn btn-primary">Editar</button>
                                    </div>
                                </div>
                        </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
