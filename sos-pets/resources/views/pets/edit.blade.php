
@extends('principal')

@section('titulo', 'Editar')

@section('conteudo')



  <section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Editar Pets</h2>
            {{-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> --}}
        </div>
        <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="{{ route('pets.update',$pet->id) }}" method="post" enctype="multipart/form-data" novalidate>
            @csrf
            @method('PUT')
            <div class="row align-items-center mb-5">
                <div class="col-md-6 justify-content-center" style="margin: auto;">
                    <div class="form-group">
                        <!-- Name input-->
                        <input value="{{$pet->nome}}" class="form-control" id="name" name="nome" type="text" placeholder="Nome *" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                    </div>
                    <div class="form-group">
                        <!-- Name input-->
                        <input value="{{$pet->idade}}" class="form-control" id="name" name="idade" type="text" placeholder="Idade *" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="name:required">Idade.</div>
                    </div>

                    <div class="form-group" style="margin-top: -8px;">
                        <option disabled selected class="text-gray-400" style="color:#fff;font-weight:bold;">Selecione um tipo *</option>
                        <select id="tipo" name="type_id" value="" onclick="this.setAttribute('value', this.value);" data-sb-validations="required"
                        class="form-control" style="margin-bottom: 10px; padding:15px; color:#6c757d;opacity:1;font-style:sans-serif">
                           <!-- <option disabled selected class="text-gray-400">Selecione um tipo *</option> -->
                             <option class="text-gray-900" value="1">Cachorro</option>
                             <option class="text-gray-900" value="2">Gato</option>
                      </select>
                        <div class="invalid-feedback" data-sb-feedback="tipo:required">Tipo obrigatório.</div>
                    </div>

                    <div class="form-group mb-md-0">
                        <input value="{{$pet->raca}}" class="form-control" style="margin-bottom: 20px" name="raca" id="raca" type="tel" placeholder="Raça *" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="raca:required">Raça obrigatório</div>
                    </div>

                    <div class="form-grup mb-md-0" style="margin-top: -8px;">
                         <option disabled selected class="text-gray-400" style="color:#fff;font-weight:bold;">Selecione um Porte *</option>
                    <select id="porte" data-sb-validations="required" name="port_id" value="" onclick="this.setAttribute('value', this.value);"
                    class="form-control" style="margin-bottom: 20px; padding:15px; color:#6c757d;opacity:1;font-style:sans-serif">
                        <!-- <option disabled selected class="text-gray-400">Selecione um porte *</option> -->
                          <option class="text-gray-900" value="1">Pequeno</option>
                          <option class="text-gray-900" value="2">Médio</option>
                          <option class="text-gray-900" value="3">Grande</option>
                    </select>
                     <div class="invalid-feedback" data-sb-feedback="porte:required">Porte obrigatório.</div>
                    </div>

                    <div class="form-grup mb-md-0" style="margin-top: -8px;">
                         <option disabled selected class="text-gray-400" style="color:#fff;font-weight:bold;">Selecione o sexo *</option>
                        <select id="sexo" data-sb-validations="required" name="sex_id" value="" onclick="this.setAttribute('value', this.value);"
                        class="form-control" style="margin-bottom: 15px; padding:15px; color:#6c757d;opacity:1;font-style:sans-serif">
                            <!-- <option disabled selected class="text-gray-400">Selecione o sexo *</option> -->
                           <option class="text-gray-900" value="1">Macho</option>
                           <option class="text-gray-900" value="2">Femêa</option>
                        </select>
                        <div class="invalid-feedback" data-sb-feedback="sexo:required">Campo sexo obrigatório.</div>
                    </div>

                    <div class="form-group">
                        <input class="form-control" id="fotos" name="fotos" type="file" placeholder="Idade *" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="fotos:required">Campo imagem é obrigatório</div>
                    </div>

                    <div class="form-group form-group-textarea mb-md-0" style="margin-top: 20px;">
                        <!-- Message input-->
                        <textarea class="form-control" name="descricao" id="message" placeholder="Descrição *" data-sb-validations="required">{{ $pet->descricao }}</textarea>
                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                    </div>

                </div>
            </div>
            <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase"  type="submit">Editar</button></div>
        </form>
    </div>
</section>


@endsection
