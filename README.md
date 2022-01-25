# Buf Multi-config test

To generate `api/v1` protos using `buf.gen.old.yaml`:

```
buf generate --path api/v1 --template buf.gen.old.yaml --debug -v
```

To generate `api/v2` protos using `buf.gen.new.yaml`:

```
buf generate --path api/v2 --template buf.gen.new.yaml --debug -v
```