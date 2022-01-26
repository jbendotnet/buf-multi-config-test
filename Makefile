buf/generate/dashboardapis:
	@buf generate --debug --path api/dashboardapis --template api/dashboardapis/buf.gen.yaml

buf/generate/gameapis:
	@buf generate --debug --path api/gameapis --template api/dashboardapis/buf.gen.yaml
