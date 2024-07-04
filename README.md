## News Endpoints

Get the News list paginate
- GET /api/news

Get the list with query params
- GET /api/news?field[operator]=value
* Example: /api/news?targetId[eq]=9

Get a specific news
- Get /api/news/news-id
* Example: /api/news/1

Create news
- POST api/news
* Body example json format: 
 `
 {
    "targetId": 3,
    "headline": "Title test",
    "description": "Sequi rerum praesentium sunt vel delectus qui.",
    "image": "https://img.freepik.com/premium-photo/still-life-fofice-supplies_23-2151540448.jpg?w=740",
    "video": "omnis.mp4",
    "document": "aut.pdf",
    "createdBy": "Felipe xcvc"
}
 `

Update news
- PUT api/news/news-id
* Example api/news/1
* Body example json format:
`
{
    "headline": "Title test Felipe",
    "description": "Sequi rerum praesentium sunt vel delectus qui.",
    "image": "https://img.freepik.com/premium-photo/still-life-fofice-supplies_23-2151540448.jpg?w=740",
    "video": "omnis.mp4",
    "document": "aut.pdf",
    "createdBy": "Felipe Paez N"
}
`

Delete news
- DELETE api/news/news-id
* Example api/news/1


### Operator enable in query params

- **[eq]** => **'='**
- **[lt]** => **'<'**
- **[lte]** => **'<='**
- **[gt]** => **'>'**
- **[gte]** => **'>='**
- **[in]** => **'like'**

### Enable fields to filter and operator for each one
- **'id'**            => ['eq', 'lt', 'lte', 'gt', 'gte']
- **'targetId'**      => ['eq']
- **'headline'**      => ['in']
- **'description'**   => ['in']
- **'image'**         => ['in']
- **'video'**         => ['in']
- **'document'**      => ['in']
- **'createdBy'**     => ['in']
- **'createdAt'**     => ['eq', 'lt', 'lte', 'gt', 'gte']

### Options to improve
- Versioning API
- Add new table to add unlimited multimedia resources