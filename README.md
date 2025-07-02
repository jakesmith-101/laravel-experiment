Run:

```bash
docker compose -f compose.dev.yaml up -d
```

Install Laravel Dependencies:

```bash
docker compose -f compose.dev.yaml exec workspace bash
composer install
npm install
npm run dev
```