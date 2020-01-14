@extends('admin.layouts.master')
@section('css')
    <meta name="viewport" content="width=device-width" />
    <title>Number Of Children - OrgChart JS | BALKANGraph</title>
    <style>
        html, body {
            margin: 0px;
            padding: 0px;
            width: 100%;
            height: 100%;
            overflow: hidden;
            font-family: Helvetica;
        }

        #tree {
            width: 100%;
            height: 100%;
        }

    </style>
@endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div id="tree"></div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script src="{{asset('/js/orgchart.js')}}"></script>
    <script>
        window.onload = function () {
            var url = "{{url('chart')}}";
            $(document).ready(function() {
                $.get(url, function (response) {
                    var nodes = response;
                    for (var i = 0; i < nodes.length; i++) {
                        nodes[i].field_number_children = childCount(nodes[i].id);
                    }
                    console.log(nodes);
                    function childCount(id) {
                        let count = 0;
                        for (var i = 0; i < nodes.length; i++) {
                            if (nodes[i].pid == id) {
                                count++;
                                count += childCount(nodes[i].id);
                            }
                        }

                        return count;
                    }

                    OrgChart.templates.rony.field_number_children = '<circle cx="60" cy="110" r="15" fill="#F57C00"></circle><text fill="#ffffff" x="60" y="115" text-anchor="middle">{val}</text>';

                    var chart = new OrgChart(document.getElementById("tree"), {
                        template: "rony",
                        collapse: {
                            level: 3
                        },
                        nodeBinding: {
                            field_0: "name",
                            field_1: "title",
                            img_0: "img",
                            field_number_children: "field_number_children"
                        },
                        menu: {
                            pdfPreview: {
                                text: "PDF Preview",
                                icon: OrgChart.icon.pdf(24,24, '#7A7A7A'),
                                onClick: preview
                            },
                            pdf: { text: "Export PDF" },
                            png: { text: "Export PNG" },
                            svg: { text: "Export SVG" },
                            csv: { text: "Export CSV" }
                        },
                        nodeMenu: {
                            pdf: { text: "Export PDF" },
                            png: { text: "Export PNG" },
                            svg: { text: "Export SVG" }
                        },
                        nodes: nodes
                    });
                    function preview(){
                        OrgChart.pdfPrevUI.show(chart, {
                            format: 'A4'
                        });
                    }
                });
            });
        };
    </script>
@endsection


