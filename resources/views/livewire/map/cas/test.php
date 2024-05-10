<form wire:submit.prevent="store" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group local-forms">
                                        <label>Type</label>
                                        <select class="form-control select" wire:model="type" @if($viewMode) disabled @endif>
                                            <option value="" selected>Select a Types</option>
                                            @foreach ($types as $type)
                                                <option value="{{ $type->id }}">{{ $type->description }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group local-forms">
                                        <label>Name</label>
                                        <input class="form-control" type="text" wire:model="firename" placeholder @if($viewMode) readonly @endif />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group local-forms">
                                        <label>Serial Number</label>
                                        <input class="form-control" type="text" wire:model="serial_number" placeholder @if($viewMode) readonly @endif />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group local-forms">
                                        <label>Building / Department</label>
                                        <select class="form-control select" wire:model="building" @if($viewMode) disabled @endif>
    @foreach ($locations as $location)
        <option value="{{ $location->id }}">{{ $location->building }}</option>
    @endforeach
</select>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group local-forms">
                                        <label>Floor</label>
                                        <select class="form-control select" wire:model="floor" @if($viewMode) disabled @endif>
                                            @foreach ($locations as $location)
                                                <option value="{{ $location->id }}">{{ $location->floor }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group local-forms">
                                        <label>Room / Office</label>
                                        <select class="form-control select" wire:model="room" @if($viewMode) disabled @endif>
                                            @foreach ($locations as $location)
                                                <option value="{{ $location->id }}">{{ $location->room }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group local-forms">
                                        <label>Installation Date</label>
                                        <input class="form-control" type="date" wire:model="installation_date" @if($viewMode) readonly @endif />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group local-forms">
                                        <label>Expiration Date</label>
                                        <input class="form-control" type="date" id="expiry-date" wire:model="expiration_date" @if($viewMode) readonly @endif />
                                        @error('expiration_date') <p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group local-forms">
                                        <label>Description</label>
                                        <input class="form-control" type="text" wire:model="description" @if($viewMode) readonly @endif />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group local-forms">
                                        <label>Status</label>
                                        <select class="form-control" wire:model="status" @if($viewMode) disabled @endif>
                                            <option value="Active">Active</option>
                                            <option value="Inactive">Inactive</option>
                                            <option value="Refill">Refill</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    @if ($viewMode)
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    @else
                        <button type="submit" class="btn btn-primary">Save</button>
                    @endif
                </div>
            </form>