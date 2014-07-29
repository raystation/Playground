json.array!(@pages) do |page|
  json.extract! page, :id, :home, :contact
  json.url page_url(page, format: :json)
end
