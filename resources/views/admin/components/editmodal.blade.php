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
                            <input type="text" id="team_id" hidden>
                            <div class="field item form-group col-12">
                                <label class="col-form-label label-align col-3 col-sm-2">Nome do Time<span class="required">*</span></label>
                                <input class="form-control col-9" id="name" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="" required="required" />
                            </div>


                            <div class="field item form-group col-12">
                                <label class="col-form-label col-3 col-sm-2 label-align">Modalidade</label>
                                <select required class="form-control" id="modality_id" name="modality_id" tabindex="-1">
                                    <option disabled selected value="">Selecione uma opção</option>
                                    @foreach(getAllModalities() as $modality)
                                        <option value="{{ $modality->id }}">
                                            {{ \App\Enums\TeamModality::tryFrom($modality->id)->toString() }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="field item form-group col-12">
                                <label class="col-form-label col-3 col-sm-2  label-align">Gênero da Modalidade</label>
                                    <select required name="gender" id="gender" class="form-control" tabindex="-1">
                                        <option disabled selected value="">Selecione uma opção</option>
                                        <option value="M">Masculino</option>
                                        <option value="F">Feminino</option>
                                        <option value="O">Misto</option>
                                    </select>
                            </div>

                            <div class="field item form-group col-12">
                                <label class="col-form-label col-3 col-sm-2 label-align">Nome da Musa<span class="required">*</span></label>
                                    <input class="form-control" type="text" id="muse" name="muse"  title="" required />
                            </div>

                            <div class="field item form-group col-12">
                                <label class="col-form-label label-align col-3 col-sm-2">Jogadores<span class="required">*</span></label>
                                    <select class="players" name="players[]" id="players" multiple="multiple" required>
                                        @foreach($players as $player)
                                            <option value="{{ $player->id }}">{{ $player->name }} - Nº {{ $player->number }}</option>
                                        @endforeach
                                    </select>
                            </div>

                            <div class="col-12 justify-content-center">
                                <button type='submit' class="btn btn-primary btn-sm col-3 offset-4">Editar</button>
                            </div>
                        </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
