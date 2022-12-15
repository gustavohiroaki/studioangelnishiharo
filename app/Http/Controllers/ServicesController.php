<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $id = 'services';

        $services = [
            "lashes" => [
                "fio_a_fio" => [
                    "imageSource" => "/assets/img/catalog/cilios-fio-fio.png",
                    "imageDescription" => "Cílios clássico fio a fio",
                    "serviceTitle" => "Clássico fio a fio",
                    "serviceDescription" => "Ideal para quem está começando no mundo da extensão e deseja realçar os cílios. Nele é
                    colocado um fio sintético em cima de um fio natural, proporciona alongamento e um efeito
                    rímel. Indicado para quem gosta de naturalidade e praticidade no dia a dia. Sua manutenção é
                    feita entre 15 a 20 dias."
                ],
                "volume_egipcio" => [
                    "imageSource" => "/assets/img/catalog/cilios-volume-egipcio.png",
                    "imageDescription" => "Cílios volume egípcio",
                    "serviceTitle" => "Volume egípcio",
                    "serviceDescription" => "É colocado um fio em formato de W, realça o olhar, proporciona volume sutil e natural, não
                    deixa um olhar marcado."
                ],
                "volume_brasileiro" => [
                    "imageSource" => "/assets/img/catalog/cilios-volume-brasileiro.png",
                    "imageDescription" => "Cílios volume brasileiro",
                    "serviceTitle" => "Volume brasileiro",
                    "serviceDescription" => "É colocado um fio em formato de Y, consegue proporcionar volume, deixando o olhar marcado,
                    porém, sem fugir da naturalidade."
                ],
                "volume_hibrido" => [
                    "imageSource" => "/assets/img/catalog/cilios-volume-hibrido.png",
                    "imageDescription" => "Volume hibrido",
                    "serviceTitle" => "Clássico fio a fio",
                    "serviceDescription" => "Possui um volume médio, nele é misturado a técnica do clássico fio a fio e o volume russo."
                ],
                "volume_russo" => [
                    "imageSource" => "/assets/img/catalog/cilios-volume-russo.png",
                    "imageDescription" => "Cílios volume russo",
                    "serviceTitle" => "Volume russo",
                    "serviceDescription" => "Para quem já está acostumado com as outras técnicas e deseja mais volume e maior destaque no
                    olhar. Nele é montado manualmente leques de fios, podendo conter de 3 a 8 fios em um fio
                    natural."
                ],
                "lash_lift" => [
                    "imageSource" => "/assets/img/catalog/cilios-lash-lift.png",
                    "imageDescription" => "Cílios lash lift",
                    "serviceTitle" => "Lash Lift",
                    "serviceDescription" => "Procedimento que curva os cílios naturais. É uma técnica que permite praticidade e
                    naturalidade.Ideal para pessoas que não se adaptaram com a extensão, ou para quem não abre
                    mão do rímel. No final é realizado coloração para realçar, e um tratamento com nutrição e
                    hidratação. Não é necessário manutenção, sua durabilidade é de 4 a 6 semanas."
                ]
            ],
            "brow" => [
                "sobrancelha" => [
                    "imageSource" => "/assets/img/catalog/sobrancelha-design.png",
                    "imageDescription" => "Design de sobrancelha",
                    "serviceTitle" => "Design de sobrancelhas",
                    "serviceDescription" => "Design personalizado, cria-se pontos estratégicos através das próprias medidas faciais,
                    tornando o design personalizado para cada tipo de rosto. Essa técnica permite valorizar o
                    máximo de pelos das sobrancelhas, sem afinar, evitando possíveis falhas no futuro.",
                    "serviceDescriptionList" => ["Incluso argiloterapia para auxiliar na reconstrução de sobrancelhas", "Incluso massagem com esferas de cromoterapia auxiliando na cicatrização, e efeito
                    calmante na região das sobrancelhas."]
                ],
                "sobrancelha_com_henna" => [
                    "imageSource" => "/assets/img/catalog/sobrancelha-design-henna.png",
                    "imageDescription" => "Design de sobrancelha com henna",
                    "serviceTitle" => "Design de sobrancelhas com henna",
                    "serviceDescription" => "Promove preenchimento natural. Indicado para pessoas que sofrem com falhas na sobrancelhas,
                    ou para quem deseja realçar o design. Não é uma técnica permanente, ideal para eventos.",
                    "serviceDescriptionList" => []
                ],
                "brow_lamination" => [
                    "imageSource" => "/assets/img/catalog/sobrancelha-brow-lamination.png",
                    "imageDescription" => "Brow Lamination na sobrancelha",
                    "serviceTitle" => "Brow Lamination",
                    "serviceDescription" => "É um tratamento para as sobrancelhas que as deixa alinhadas, e nela cria-se um efeito wild
                    (selvagem), proporcionando volume e cobertura de falhas. Sua durabilidade é de 4 a 6
                    semanas.",
                    "serviceDescriptionList" => []
                ],
                "micropigmentao_shadow" => [
                    "imageSource" => "/assets/img/catalog/sobrancelha-micro-shadow.png",
                    "imageDescription" => "Micropigmentação na sobrancelha com técnica shadow",
                    "serviceTitle" => "Micropigmentação shadow",
                    "serviceDescription" => "Técnica que cobre falhas, preenche as sobrancelhas e corrige assimetrias. O foco é a
                    naturalidade, deixando apenas um sombreado leve. É realizado design personalizado,
                    valorizando e harmonizando cada rosto dentro da própria medida facial (sem afinar). Permite
                    praticidade no dia a dia, com uma longa durabilidade, sendo ela de 8 meses a 1 ano e meio.",
                    "serviceDescriptionList" => []
                ],
                "micropigmentao_fio_a_fio" => [
                    "imageSource" => "/assets/img/catalog/sobrancelha-micro-fio.png",
                    "imageDescription" => "Micropigmentação na sobrancelha com técnica fio a fio",
                    "serviceTitle" => "Micropigmentação fio a fio",
                    "serviceDescription" => "Essa técnica imita os fios reais da sobrancelha, cria volume, corrige falhas e assimetrias.
                    Ideal para quem gosta da máxima naturalidade e deseja apenas preencher as sobrancelhas. É
                    realizado design personalizado, valorizando o máximo de pelos possíveis. Sua durabilidade é
                    de 8 meses a 1 ano.",
                    "serviceDescriptionList" => []
                ]
            ]
        ];

        $payload = [
            'css' => $id,
            'title' => 'Sobre',
            'services' => $services
        ];

        return view($id, $payload);
    }
}
