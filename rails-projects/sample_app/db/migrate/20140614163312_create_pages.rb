class CreatePages < ActiveRecord::Migration
  def change
    create_table :pages do |t|
      t.string :home
      t.string :contact

      t.timestamps
    end
  end
end
