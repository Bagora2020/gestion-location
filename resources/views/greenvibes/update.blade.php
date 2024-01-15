<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('greenvibes.update', $data->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleSelect1" class="form-label mt-4">Mois</label>
                        <select class="form-select" id="exampleSelect1" name="mois">
                            <option value="janvier">{{ $data->mois }}</option>
                            <option value="fevrier">{{ $data->mois }}</option>
                            <option value="mars">{{ $data->mois }}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelect2" class="form-label mt-4">Montant</label>
                        <select class="form-select" id="exampleSelect2" name="montant">
                            <option value="25000">{{ $data->montant }}</option>
                        </select>
                    </div>

                    <div class="mt-3">
                        <button class="btn btn-success" type="submit"> Enregistrer</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>