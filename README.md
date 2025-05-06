### Steps
Start docker compose
```
docker compose up -d
```

### Clickhouse
1/ Connect clickhouse
```
docker compose exec -it clickhouse clickhouse-client
```

2/ Create database named `default` if not exists yet
```
create database default
```

3/ Create `php_logs` table inside `default` database like below
```
CREATE TABLE php_logs (
  timestamp DateTime,
  message String,
  log String,
  container_id String,
  container_name String,
  source String
) ENGINE = MergeTree()
ORDER BY timestamp;
```