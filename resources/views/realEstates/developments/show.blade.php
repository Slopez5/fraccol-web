@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <x-card :title="'Tipos de lote'">
                    <x-slot:tools>
                        <a href="{{ route('realEstate.development.loteType.create', $development->id) }}"
                            class="btn btn-primary">
                            <i class="fas fa-plus"></i>
                        </a>
                    </x-slot>
                    <x-slot:body>
                        <x-table :headers="['Nombre', 'Descripción', 'Precio']" :dataCell="$loteTypes" :action="function ($loteType) use ($development) {
                            return view('components.table.actions', [
                                'data' => $loteType,
                                'delete' => route('realEstate.development.loteType.delete', [
                                    $development->id,
                                    $loteType->id,
                                ]),
                            ]);
                        }">
                        </x-table>
                    </x-slot>
                </x-card>
            </div>
            <div class="col-6">
                <x-card :title="'Financiamientos'">
                    <x-slot:tools>
                        <a href="{{ route('realEstate.development.paymentPlan.create', $development->id) }}"
                            class="btn btn-primary">
                            <i class="fas fa-plus"></i>
                        </a>
                    </x-slot>
                    <x-slot:body>
                        <x-table :headers="['id','Nombre', 'Enganche', 'Precio']" :dataCell="$paymentPlans" :action="function ($paymentPlan) use ($development) {
                            return view('components.table.actions', [
                                'data' => $paymentPlan,
                                'delete' => route('realEstate.development.paymentPlan.delete', [
                                    $development->id,
                                    $paymentPlan->id,
                                ]),
                            ]);
                        }">
                        </x-table>
                    </x-slot>
                </x-card>
            </div>
            <div class="col-12">
                <x-card :title="'Lotes'">
                    <x-slot:tools>
                        <a href="{{ route('realEstate.development.lote.create', $development->id) }}"
                            class="btn btn-primary">
                            <i class="fas fa-plus"></i>
                        </a>
                    </x-slot>
                    <x-slot:body>
                        <x-table :headers="['Manzana', 'Lote', 'Superficie', 'Precio', 'Estatus']" :dataCell="$lotes"
                            :action="function ($lote) use ($development) {
                                return view('components.table.actions', [
                                    'data' => $lote,
                                    'edit' => route('realEstate.development.lote.edit', [
                                        $development->id,
                                        $lote->id,
                                    ]),
                                    'delete' => route('realEstate.development.lote.delete', [
                                        $development->id,
                                        $lote->id,
                                    ]),
                                ]);
                            }">
                        </x-table>
                    </x-slot>
                </x-card>
            </div>
        </div>
    </div>
@endsection
