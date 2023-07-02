<div class="py-6">
    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
        <x-error-list />
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <form action="{{ route('people.store') }}" method="POST">
                    @csrf

                    <div class="flex">
                        <div class="w-1/2 pr-4">
                            <label for="marital_status_id" class="block text-gray-700 text-sm font-bold mb-2">Estado Civil:</label>
                            <select name="marital_status_id" id="marital_status_id" value="{{ old('marital_status_id') }}" class="border border-gray-300 rounded px-3 py-2 w-full">
                                <option value="">Selecione</option>
                                @foreach($maritalStatus as $maritalStatus)
                                <option value="{{ $maritalStatus->id }}">{{ $maritalStatus->status }}</option>
                                @endforeach
                            </select>

                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2 mt-4">Nome:</label>
                            <input type="text" name="name" id="name" class="border border-gray-300 rounded px-3 py-2 w-full" value="{{ old('name') }}" placeholder="Nome completo">

                            <label for="gender" class="block text-gray-700 text-sm font-bold mb-2 mt-4">Gênero:</label>
                            <select name="gender" id="gender" class="border border-gray-300 rounded px-3 py-2 w-full" value="{{ old('gender') }}">
                                <option value="">Selecione</option>
                                <option value="M">Masculino</option>
                                <option value="F">Feminino</option>
                                <option value="O">Outro</option>
                                <option value="N/I">Não informar</option>
                            </select>

                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2 mt-4">E-mail:</label>
                            <input type="email" name="email" id="email" class="border border-gray-300 rounded px-3 py-2 w-full" value="{{ old('email') }}" placeholder="exemplo.teste@gmail.com">

                            <label for="phone" class="block text-gray-700 text-sm font-bold mb-2 mt-4">Telefone:</label>
                            <input type="tel" name="phone" id="phone" class="border border-gray-300 rounded px-3 py-2 w-full" value="{{ old('phone') }}" placeholder="(99) 99999-9999">

                            <label for="date_birth" class="block text-gray-700 text-sm font-bold mb-2 mt-4">Data de Nascimento:</label>
                            <input type="date" name="date_birth" id="date_birth" value="{{ old('date_birth') }}" class="border border-gray-300 rounded px-3 py-2 w-full">
                        </div>

                        <div class="w-1/2 pl-4">
                            <label for="cep" class="block text-gray-700 text-sm font-bold mb-2">CEP:</label>
                            <input type="text" name="cep" id="cep" class="border border-gray-300 rounded px-3 py-2 w-full cep-mask" value="{{ old('cep') }}" placeholder="00000-000" maxlength="12">

                            <label for="state" class="block text-gray-700 text-sm font-bold mb-2 mt-4">Estado:</label>
                            <input type="text" name="state" id="state" class="border border-gray-300 rounded px-3 py-2 w-full" value="{{ old('state') }}" placeholder="Amazonas">

                            <label for="county" class="block text-gray-700 text-sm font-bold mb-2 mt-4">Município:</label>
                            <input type="text" name="county" id="county" class="border border-gray-300 rounded px-3 py-2 w-full" value="{{ old('county') }}" placeholder="Manaus">

                            <label for="street" class="block text-gray-700 text-sm font-bold mb-2 mt-4">Rua:</label>
                            <input type="text" name="street" id="street" class="border border-gray-300 rounded px-3 py-2 w-full" value="{{ old('street') }}" placeholder="Rua Exemplo ">

                            <label for="number" class="block text-gray-700 text-sm font-bold mb-2 mt-4">Número:</label>
                            <input type="text" name="number" id="number" class="border border-gray-300 rounded px-3 py-2 w-full" value="{{ old('number') }}" placeholder="241">

                            <label for="district" class="block text-gray-700 text-sm font-bold mb-2 mt-4">Bairro:</label>
                            <input type="text" name="district" id="district" class="border border-gray-300 rounded px-3 py-2 w-full" value="{{ old('district') }}" placeholder="Cidade Nova">

                            <label for="complement" class="block text-gray-700 text-sm font-bold mb-2 mt-4">Complemento:</label>
                            <input type="text" name="complement" id="complement" class="border border-gray-300 rounded px-3 py-2 w-full" value="{{ old('complement') }}" placeholder="Perto de uma igreja">
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">Cadastrar</button>
                        <a href="{{ route('people.index') }}" class="bg-indigo-400 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded">Voltar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        var cepInput = document.getElementById('cep');

        cepInput.addEventListener('input', function(e) {
            var value = e.target.value;
            value = value.replace(/\D/g, '');

            if (value.length > 8) {
                value = value.slice(0, 8);
            }

            if (value.length === 5) {
                value = value.replace(/(\d{5})(\d)/, '$1-$2');
            } else if (value.length > 5) {
                value = value.replace(/(\d{5})(\d{3})/, '$1-$2');
            }

            e.target.value = value;
        });

        var phoneInput = document.getElementById('phone');

        phoneInput.addEventListener('input', function(e) {
            var value = e.target.value;
            value = value.replace(/\D/g, '');

            if (value.length > 11) {
                value = value.slice(0, 11);
            }

            if (value.length === 11) {
                value = value.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
            } else if (value.length === 10) {
                value = value.replace(/(\d{2})(\d{4})(\d{4})/, '($1) $2-$3');
            } else if (value.length === 9) {
                value = value.replace(/(\d{2})(\d{5})(\d{2})/, '($1) $2-$3');
            } else if (value.length === 8) {
                value = value.replace(/(\d{4})(\d{4})/, '$1-$2');
            }

            e.target.value = value;
        });
    });

    document.getElementById('cep').addEventListener('change', function() {
        let cep = this.value.replace(/\D/g, '');

        if (cep.length === 8) {
            fetch(`https://viacep.com.br/ws/${cep}/json/`)
                .then(response => response.json())
                .then(data => {
                    if (data.uf !== 'AM') {
                        alert('O CEP informado não pertence ao estado do Amazonas; Logo, não é possível realizar o cadastro.');
                        return;
                    }

                    document.getElementById('state').value = data.uf;
                    document.getElementById('county').value = data.localidade;
                    document.getElementById('street').value = data.logradouro;
                    document.getElementById('district').value = data.bairro;
                })
                .catch(error => {
                    console.log(error);
                });
        } else {
            alert('Quantidade de dígitos invalida para um cep.');
        }
    });
</script>