<%-- cached $ID, $BustCache, $Page, $Modified --%>{
"@context": "https://project-open-data.cio.gov/v1.1/schema/catalog.jsonld",
"@type": "dcat:Catalog",
"@id": "$ID",
"conformsTo": "https://project-open-data.cio.gov/v1.1/schema",
"dataset": [
<% loop $Datasets %>
    {
    "@type": "dcat:Dataset",
    "title": "$Title",
    "landingPage": "$LandingPage",
    "identifier": "$Identifier",
    "description": "$Description",
    "keyword": [$Keyword],
    <% if $Theme %>"theme": "$Theme",<% end_if %>
    "issued": "$Issued",
    "modified": "$Modified",
    "accrualPeriodicity": "$AccrualPeriodicity",
    "license": "$License",
    "publisher": {
        "@type": "org:Organization",
        "name": "$PublisherName"
    },
    "contactPoint": {
        "@type": "vcard:Contact",
        "fn": "$ContactPointMame",
        "hasEmail": "$ContactPointEmail",
        "hasPhone": "$ContactPointPhone"
    }
    <% if Distributions %>,
    "distribution": [
        <% loop $Distributions %>
        {
            "@type": "dcat:Distribution",
            "downloadURL": "$DownloadURL",
            "title": "$Title",
            "format": "$Format"
        }<% if not $Last %>,<% end_if %>
        <% end_loop %>
    ]
    <% end_if %>
    }<% if not $Last %>,<% end_if %>
<% end_loop %>
]
}
<%-- end_cached --%>