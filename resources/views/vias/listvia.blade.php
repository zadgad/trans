@extends('layouts.appl', ['activePage' => 'user-management', 'titlePage' => __(' Lista de Empleados ')])
@section('content')
 <div class="main-content">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-calendar bg-blue"></i>
                        <div class="d-inline">
                            <h5>Lista De Vias Registrados En Sistema</h5>
                            <span>Informacion de las Vias que se encuentran en el sistema</span>
                            <br>
                            <br>
                            <h6> </h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="../index.html"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Apps</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Lista De Vias</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="card-header">
                    <h3>Lista de Vias</h3>
                    </div>
                    <a href="{{route('añadir_via')}}" class="btn btn-sm btn-primary">{{ __('Añadir Via') }}</a>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class=" text-primary">
                                <th class="text-center">
                                  {{ __('#')}}
                                </th>
                                 <th class="text-center">
                                     {{ __('Nombre Via') }}
                                 </th>
                                 <th class="text-center">
                                   {{ __('Ciudad') }}
                                 </th>
                                 <th class="text-center">
                                   {{ __('Departamento') }}
                                 </th>
                                 <th class="text-center">
                                   {{ __('Dimencion') }}
                                 </th>
                                 <th class="text-center">
                                   {{ __('#Carril') }}
                                 </th>
                                 <th class="text-center">
                                   {{ __('Tipo') }}
                                 </th>
                                 <th class="text-center">
                                   {{ __('Clasificacion') }}
                                 </th>
                                 <th class="text-right">
                                   {{ __('Accion') }}
                                 </th>
                               </thead>

                                       <tbody>
                                         @foreach($vias as $via)
                                         <tr>
                                           <td class="text-center">
                                             {{$loop->iteration }}
                                           </td>
                                           <td class="text-center">
                                             {{ $via->nomvia }}
                                           </td>
                                           <td class="text-center">
                                             {{ $via->nombc }}
                                           </td>
                                           <td class="text-center">
                                             {{ $via->nomb }}
                                           </td>
                                           <td class="text-center">
                                             {{ $via->dimension }}
                                           </td>
                                           <td class="text-center">
                                             {{ $via->nuncarril }}
                                           </td>
                                           <td class="text-center">
                                             {{ $via->tipo }}
                                           </td>
                                           <td class="text-center">
                                             {{ $via->clacificacion }}
                                           </td>

                                           <td class="td-actions text-right">
                                             {{-- @if ($user->id != auth()->id())

                                             @else
                                               <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('profile.edit') }}" data-original-title="" title="">
                                                 <i class="material-icons">editar</i>
                                                 <div class="ripple-container"></div>
                                               </a>
                                             @endif --}}
                                             <form action={{-- "{{ route('user.destroy', $user) }}" --}} method="post">
                                                 @csrf
                                                 @method('delete')

                                                 <form action={{-- "{{ route('user.destroy', $user) }}" --}}  method="post">
                                                   @csrf
                                                   @method('delete')

                                                   <a  href="{{route('editVia',$id=$via->id_via)}}"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
                                                     <a href=""><i class="ik ik-trash-2 f-16 text-red"></i></a>
                                               </form>

                                             </form>
                                           </td>
                                         </tr>
                                       @endforeach
                                           </tbody>
                                           <tfoot>
                                            <th class="text-center">
                                                {{ __('#')}}
                                              </th>
                                               <th class="text-center">
                                                   {{ __('Nombre Via') }}
                                               </th>
                                               <th class="text-center">
                                                 {{ __('Ciudad') }}
                                               </th>
                                               <th class="text-center">
                                                 {{ __('Departamento') }}
                                               </th>
                                               <th class="text-center">
                                                 {{ __('Dimencion') }}
                                               </th>
                                               <th class="text-center">
                                                 {{ __('#Carril') }}
                                               </th>
                                               <th class="text-center">
                                                 {{ __('Tipo') }}
                                               </th>
                                               <th class="text-center">
                                                 {{ __('Clasificacion') }}
                                               </th>
                                               <th class="text-right">
                                                 {{ __('Accion') }}
                                               </th>
                                           </tfoot>
                                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
 @endsection

 @push('links')
 <link rel="stylesheet" href="{{ asset('proyect') }}./plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="{{asset('proyect')}}./plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css">

 @endpush
 @push('scripts')
         <script src="{{ asset('proyect') }}./plugins/datatables.net/js/jquery.dataTables.min.js"></script>
         <script src="{{ asset('proyect') }}./plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
         <script src="{{ asset('proyect') }}./js/datatables.js"></script>

 @endpush
