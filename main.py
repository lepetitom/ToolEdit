import lettria
api_key = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhbmFseXRpY0lkIjoiNjA3ZWI3NjA4NzZkZWE3M2I5NzE2NWU4IiwicHJvamVjdElkIjoiNjA3ZWI3NjA4NzZkZWE3M2I5NzE2NWU5Iiwic3Vic2NyaXB0aW9uSWQiOiI2MDdlYjZlZTg3NmRlYTczYjk3MTY1ZTciLCJpYXQiOjE2MTg5MTg5NTcsImV4cCI6MTY2NzMwMjk1N30.XoD6pPsT2v1KpPwe0sZ49xYPTxVqRBDZFUQ_bjDlzgw'
nlp = lettria.NLP(api_key)
your_text = "Ceci est un exemple de texte pour une requête."
wikipedia_data = your_text
nlp.add_document(wikipedia_data)
nlp.save_results('test2.json')