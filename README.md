Run:

```bash
docker compose -f compose.dev.yml up -d
```

Install Laravel Dependencies:

```bash
docker compose -f compose.dev.yml exec workspace bash
composer install
npm install
npm run dev
```