@section('title', __('Docentes'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Docente Listing </h4>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Search Docentes">
						</div>
						<div class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#createDataModal">
						<i class="fa fa-plus"></i>  Add Docentes
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.docentes.modals')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Cedula</th>
								<th>Nombre</th>
								<th>Apellido</th>
								<th>Fecha Nacimiento</th>
								<th>Id Genero</th>
								<th>Foto Personal</th>
								<th>Genero</th>
								<th>Telefono</th>
								<th>Email</th>
								<th>Direccion</th>
								<th>Acercade</th>
								<th>Observaciones</th>
								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@forelse($docentes as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->cedula }}</td>
								<td>{{ $row->nombre }}</td>
								<td>{{ $row->apellido }}</td>
								<td>{{ $row->fecha_nacimiento }}</td>
								<td>{{ $row->id_genero }}</td>
								<td>{{ $row->foto_personal }}</td>
								<td>{{ $row->genero }}</td>
								<td>{{ $row->telefono }}</td>
								<td>{{ $row->email }}</td>
								<td>{{ $row->direccion }}</td>
								<td>{{ $row->acercade }}</td>
								<td>{{ $row->observaciones }}</td>
								<td width="90">
									<div class="dropdown">
										<a class="btn btn-sm btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
											Actions
										</a>
										<ul class="dropdown-menu">
											<li><a data-bs-toggle="modal" data-bs-target="#updateDataModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Edit </a></li>
											<li><a class="dropdown-item" onclick="confirm('Confirm Delete Docente id {{$row->id}}? \nDeleted Docentes cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Delete </a></li>  
										</ul>
									</div>								
								</td>
							</tr>
							@empty
							<tr>
								<td class="text-center" colspan="100%">No data Found </td>
							</tr>
							@endforelse
						</tbody>
					</table>						
					<div class="float-end">{{ $docentes->links() }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>